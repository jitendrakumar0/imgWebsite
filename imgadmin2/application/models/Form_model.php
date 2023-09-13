<?php
class Form_model extends CI_Model{
public function __construct() {
	parent::__construct(); 
		$this->load->helper('query');
	}
 
	 public function get_result($data,$tablename){
		$this->db->select('*');
		$this->db->from($tablename);
		$this->db->where($data);
		$query = $this->db->get();
		return $query->result();	
	}
	
	public function site_url()
	{
		$url = 'https://www.transpo.in/projects/rdaexam/';
		return $url;
	}
	
	
	
	public function insert_data($data,$tableName){
		$this->db->insert($tableName,$data);
		$insert_id = $this->db->insert_id();
		return $insert_id;		
	}
	
	public function delete_data($data,$tableName){
		$this->db->where($data);
		$this->db->delete($tableName);		
	}
	
	
	public function update_data($table,$data,$whr_col,$whr_data){
		$this->db->where($whr_col,$whr_data);
		$this->db->update($table,$data);
		$afftectedRows=$this->db->affected_rows();
		return $afftectedRows;
	}
	
	public function sendMsg($mobile,$txtmsg)
	{
		$txtmsg=rawurlencode($txtmsg); 
		$url="http://sms.imgglobalinfotech.com/api/send_http.php?authkey=d7cf1d5ecc5bc5c55079a1bef1c4a4eb&mobiles=".$mobile."&message=$txtmsg&sender=IPSTOR&route=B";
		// $url="http://sms.imgglobalinfotech.com/api/send_http.php?authkey=80162d19d1cdd334bfb2e6bba869bcf7&mobiles=$mobile&message=$txtmsg&sender=CASHTM&route=B";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_exec($ch);
		curl_close($ch);
	}
	
	public function checkLogin()
	{
	    $mmid = $this->session->userdata('user_data');
     	$mid = $mmid['member_id']; 
		 
		if($mid!='')
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	
	public function getTdsRatio()
	{
		$govtTaxRatio='0';
		$GovtTaxResult=$this->db->select('percentage')->where('ratio_id','2')->get('str_incomeratio')->result();
		if(!empty($GovtTaxResult))
		{
			if($GovtTaxResult['0']->percentage)
			{
				$govtTaxRatio=$GovtTaxResult['0']->percentage;
			}
		}
		return $govtTaxRatio;
	}
	
	public function getAdminTaxRatio()
	{
		$AdminTaxRatio='0';
		$AdminTaxResult=$this->db->select('percentage')->where('ratio_id','3')->get('str_incomeratio')->result();
		if(!empty($AdminTaxResult))
		{
			if($AdminTaxResult['0']->percentage)
			{
				$AdminTaxRatio=$AdminTaxResult['0']->percentage;
			}
		}
		return $AdminTaxRatio;
	}
	
	
	function MailSentNow11($message,$subject,$to)
	{
		$config['charset'] = 'utf-8';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';
		$this->load->library('email');
		$this->email->initialize($config);
		$this->email->from('support@dermaglobal.org', 'Derma Global');
		$this->email->to($to);
		// $ci->email->reply_to('neeraj.img@gmail.com');
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();
	}
	
	
	
		 function MailSentNow($message,$subject,$to)
	 {	

		$config['charset'] = 'utf-8';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';
		$this->load->library('email');
		$this->email->initialize($config);
		$this->email->from('support@dermaglobal.org', 'Derma Global');
		$this->email->to($to);
		// $ci->email->reply_to('neeraj.img@gmail.com');
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();
	}
	

	
	/*==Genrated binary Income==*/
	
	public function getBinaryIncome()
	{
		$binaryIncome='0';
		$binaryIncomeResult=$this->db->select('percentage')->where('ratio_id','1')->get('str_incomeratio')->result();
		if(!empty($binaryIncomeResult))
		{
			if($binaryIncomeResult['0']->percentage)
			{
				$binaryIncome=$binaryIncomeResult['0']->percentage;
			}
		}
		return $binaryIncome;
	}
	 
	
	public function checkBinaryIncomeForUser($uniqueId,$getTotalLeftUserPv,$getTotalRightUserPv)
	{	
		$getReferreMemberId=getIdByUniqueId($uniqueId);
		$toalOfgivenPairIncome=$this->genratedPairByUserSum($getReferreMemberId);
		
		$getTotalLeftUserPv=$getTotalLeftUserPv-$toalOfgivenPairIncome;
		$getTotalRightUserPv=$getTotalRightUserPv-$toalOfgivenPairIncome;
		
		/*=created user pair==*/
		$createdPair=(min($getTotalLeftUserPv,$getTotalRightUserPv));
							
		
		
		/*=get actual pair for created binaryIncome==*/
		
		
		if($createdPair>0)
		{
			$this->genratedBinaryIncome($createdPair,$getReferreMemberId,$getTotalLeftUserPv,$getTotalRightUserPv);
		}
	}
	/*==Sum of total pair created by user===*/

	public function genratedPairByUserSum($userId)
	{
		$totalPairs=0;
		$netPairCond=array(
			'user_id'=>$userId,
			'date(created_date) !='=>date("Y-m-d"),
		);
		$result=$this->db->select('SUM(net_pairs)')->where($netPairCond)->get('str_userincome')->result(); 
		$fieldName="SUM(net_pairs)";
		if(!empty($result))	
		{
			if($result['0']->$fieldName!='')
			{
				$totalPairs=$result['0']->$fieldName;
			}
		}
		return $totalPairs;
	}
	
	

	public function genratedBinaryIncome($pair,$userId,$leftPv,$rightPv)
	{
		$carryLeftPv=$leftPv-$pair;
		$carryRightPv=$rightPv-$pair;
		$binaryIncome=$this->getBinaryIncome();
		$govtTax=$this->getTdsRatio();
		$AdminTax=$this->getAdminTaxRatio();
		$userCapping=$this->getUserCapping($userId);
		$pairAmount=$pair;
		$createdBinaryIncome=round((($pairAmount*$binaryIncome)/100),2);
 
		/*===calculation of gross Amount==*/
		$createdGrossAmount=0;
		$createdGrossAmount=$createdBinaryIncome;
		
		/*===calculation of Govt.Tax  Amount==*/
		$createdtds_Amount=0;
		$createdtds_Amount=round((($createdGrossAmount*$govtTax)/100),2);
		
		/*===calculation of Admin.Tax  Amount==*/
		$createdAdmin_Amount=0;
		$createdAdmin_Amount=round((($createdGrossAmount*$AdminTax)/100),2);
		
		/*===calculation of Net Amount  Amount==*/
		$netAmount=0;
		$netAmount=$createdGrossAmount-($createdtds_Amount+$createdAdmin_Amount);
		
		if($createdBinaryIncome>0)
		{
			$incomeCond=array(
				'user_id'=>$userId,
				'date(created_date)'=>date("Y-m-d"),
			);
			
			$cchkCurrentPairIncome=$this->db->select('income_id,binary_income')->where($incomeCond)->get('str_userincome')->row();
			
			$incomeArray=array(
				'user_id'=>$userId,
				'left_pv'=>$leftPv,
				'right_pv'=>$rightPv,
				'carry_leftpv'=>$carryLeftPv,
				'carry_rightpv'=>$carryRightPv,
				'net_pairs'=>$pair,
				'binary_income'=>$createdBinaryIncome,
				'gross_amount'=>$createdGrossAmount,
				'tds_amount'=>$createdtds_Amount,
				'admin_amount'=>$createdAdmin_Amount,
				'net_amount'=>$netAmount,
			);
			
			/*==get final amount by capping==*/

			if($createdBinaryIncome>$userCapping)
			{
				$createdBinaryIncome=$userCapping;
			}
		
			if(empty($cchkCurrentPairIncome))
			{
				$this->insert_data($incomeArray,'str_userincome');
				$this->addMoneyInWallet($userId,'1','cr',$createdBinaryIncome);				
			}
			else
			{ 
				$currentDateOldBinaryIncome=$cchkCurrentPairIncome->binary_income;
				$newCreatedBinaryIncome=$createdBinaryIncome-$currentDateOldBinaryIncome;
				if($newCreatedBinaryIncome>0)
				{
					$this->addMoneyInWallet($userId,'1','cr',$newCreatedBinaryIncome);	
				}
				$this->update_data('str_userincome',$incomeArray,'income_id',$cchkCurrentPairIncome->income_id);
			 }
		}
	}
	
	public function addMoneyInWallet($userId,$particularId,$type,$amount,$status='SUCCESS',$givenuserId='0',$level='0')
	{
		if($amount>0)
		{ 
			
			$walletArray=array(
				'user_id'=>$userId, 
				'given_userid'=>$givenuserId,
				'level'=>$level,
				'particular_id'=>$particularId,
				'type'=>$type,
				'amount'=>$amount, 
				'net_amount'=>$amount,
				'status'=>$status,
			);
			
			$this->insert_data($walletArray,'str_wallet');	
		} 	
	}
	
	public function totalBinaryIncoByMemberId($id)
	{
		$fieldName="SUM(binary_income)";
		$result=$this->db->select('SUM(binary_income)')->where('user_id',$id)->get('str_userincome')->row();
		 
		if(!empty($result->$fieldName))
		{
			return $result->$fieldName;
		}
		else
		{
			return "0.00";
		}
	}
	
	public function getLeaderShipTaxRatio()
	{
		$leadershipRatio='0';
		$leadership=$this->db->select('percentage')->where('ratio_id','4')->get('str_incomeratio')->result();
		if(!empty($leadership))
		{
			if($leadership['0']->percentage)
			{
				$leadershipRatio=$leadership['0']->percentage;
			}
		}
		return $leadershipRatio;
	}
	
	public function getLeaderShipBoostTaxRatio()
	{
		$leadershipRatio='0';
		$leadership=$this->db->select('percentage')->where('ratio_id','5')->get('str_incomeratio')->result();
		if(!empty($leadership))
		{
			if($leadership['0']->percentage)
			{
				$leadershipRatio=$leadership['0']->percentage;
			}
		}
		return $leadershipRatio;
	}
	
	public function createdTotalLeadershipBonus($userId,$type=null)
	{
		$totalBonus=0;
		
		if($type=='current')
		{
			$leaderCond=array(
				'user_id'=>$userId, 
			);
		
		}
		else
		{
			$leaderCond=array(
				'user_id'=>$userId,
				'date(created_date) !='=>date("Y-m-d"),
			);
		}
		$result=$this->db->select('SUM(leadership_amount)')->where($leaderCond)->get('str_userincome')->result(); 
		$fieldName="SUM(leadership_amount)";
		if(!empty($result))	
		{
			if($result['0']->$fieldName!='')
			{
				$totalBonus=$result['0']->$fieldName;
			}
		}
		return $totalBonus;
	}
	
	public function genratedLeadershipIncome($leadAmt,$userId)
	{  
		$govtTax=$this->getTdsRatio();
		$AdminTax=$this->getAdminTaxRatio(); 
		$leadatio=$this->getLeaderShipTaxRatio(); 
		$createdLeadershipIncome=round((($leadAmt*$leadatio)/100),2);
		$alreadyGivenTotalBonus=$this->createdTotalLeadershipBonus($userId,'current');
	 
		if($createdLeadershipIncome>$alreadyGivenTotalBonus)
		{
			 
			$incomeCond=array(
				'user_id'=>$userId,
				'date(created_date)'=>date("Y-m-d"),
			);
			$cchkCurrentIncome=$this->db->select('income_id,leadership_amount,gross_amount')->where($incomeCond)->get('str_userincome')->row();
			
			if(!empty($cchkCurrentIncome))
			{
				$oldGivenLeaderShipBonus=$this->createdTotalLeadershipBonus($userId); 
				$createdBonus=$createdLeadershipIncome-$oldGivenLeaderShipBonus;
				$grossAmount=($cchkCurrentIncome->gross_amount)+$createdBonus;  
				
				/*===calculation of Govt.Tax  Amount==*/
				$createdtds_Amount=0;
				$createdtds_Amount=round((($grossAmount*$govtTax)/100),2);
				
				/*===calculation of Admin.Tax  Amount==*/
				$createdAdmin_Amount=0;
				$createdAdmin_Amount=round((($grossAmount*$AdminTax)/100),2);
				
				/*===calculation of Net Amount  Amount==*/
				$netAmount=0;
				$netAmount=$grossAmount-($createdtds_Amount+$createdAdmin_Amount);
				
				$incomeArray=array(
					'user_id'=>$userId,     
					'leadership_amount'=>$createdBonus,
					'gross_amount'=>$grossAmount,
					'tds_amount'=>$createdtds_Amount,
					'admin_amount'=>$createdAdmin_Amount,
					'net_amount'=>$netAmount,
				);
			 
				$this->update_data('str_userincome',$incomeArray,'income_id',$cchkCurrentIncome->income_id);
				
				/*==Insert wallet data==*/
				
				$newWalletAmount=$createdLeadershipIncome-$alreadyGivenTotalBonus;
				$this->addMoneyInWallet($userId,'4','cr',$newWalletAmount);	
			}
			
			 
		}
	}
	
	
	public function createdTotalLeadershipBoostBonus($userId,$type=null)
	{
		$totalBonus=0;
		
		if($type=='current')
		{
			$leaderCond=array(
				'user_id'=>$userId, 
			);
		
		}
		else
		{
			$leaderCond=array(
				'user_id'=>$userId,
				'date(created_date) !='=>date("Y-m-d"),
			);
		}
		$result=$this->db->select('SUM(leadbooster_amount)')->where($leaderCond)->get('str_userincome')->result(); 
		$fieldName="SUM(leadbooster_amount)"; 
		if(!empty($result))	
		{
			if($result['0']->$fieldName!='')
			{
				$totalBonus=$result['0']->$fieldName;
			}
		}
		return $totalBonus;
	}
	
	public function genratedLeadershipBoosterIncome($leadAmt,$userId)
	{  
		$govtTax=$this->getTdsRatio();
		$AdminTax=$this->getAdminTaxRatio(); 
		$leadatio=$this->getLeaderShipBoostTaxRatio(); 
		$createdLeadershipIncome=round((($leadAmt*$leadatio)/100),2);
		$alreadyGivenTotalBonus=$this->createdTotalLeadershipBoostBonus($userId,'current');
	 
		if($createdLeadershipIncome>$alreadyGivenTotalBonus)
		{
			 
			$incomeCond=array(
				'user_id'=>$userId,
				'date(created_date)'=>date("Y-m-d"),
			);
			$cchkCurrentIncome=$this->db->select('income_id,leadbooster_amount,gross_amount')->where($incomeCond)->get('str_userincome')->row();
			
			if(!empty($cchkCurrentIncome))
			{
				$oldGivenLeaderShipBonus=$this->createdTotalLeadershipBoostBonus($userId); 
				$createdBonus=$createdLeadershipIncome-$oldGivenLeaderShipBonus;
				$grossAmount=($cchkCurrentIncome->gross_amount)+$createdBonus;  
				
				/*===calculation of Govt.Tax  Amount==*/
				$createdtds_Amount=0;
				$createdtds_Amount=round((($grossAmount*$govtTax)/100),2);
				
				/*===calculation of Admin.Tax  Amount==*/
				$createdAdmin_Amount=0;
				$createdAdmin_Amount=round((($grossAmount*$AdminTax)/100),2);
				
				/*===calculation of Net Amount  Amount==*/
				$netAmount=0;
				$netAmount=$grossAmount-($createdtds_Amount+$createdAdmin_Amount);
				
				$incomeArray=array(
					'user_id'=>$userId,     
					'leadbooster_amount'=>$createdBonus,
					'gross_amount'=>$grossAmount,
					'tds_amount'=>$createdtds_Amount,
					'admin_amount'=>$createdAdmin_Amount,
					'net_amount'=>$netAmount,
				);
			 
				$this->update_data('str_userincome',$incomeArray,'income_id',$cchkCurrentIncome->income_id);
				
				/*==Insert wallet data==*/
				
				$newWalletAmount=$createdLeadershipIncome-$alreadyGivenTotalBonus;
				$this->addMoneyInWallet($userId,'5','cr',$newWalletAmount);	
			}						 
		}
	 }
	 
	 
	 
		/*==start upline income code==*/
			public function getUplineTaxRatio()
			{
				$uplineRatio='0';
				$upline=$this->db->select('percentage')->where('ratio_id','6')->get('str_incomeratio')->result();
				if(!empty($upline))
				{
					if($upline['0']->percentage)
					{
						$uplineRatio=$upline['0']->percentage;
					}
				}
				return $uplineRatio;
			}
	
		public function totalUserUplineBonus($userId)
		{
				$uplineCond=array(
					'user_id'=>$userId,
					'date(created_date)'=>date("Y-m-d"),
				);
				$result=$this->db->select('SUM(upline_bonus)')->where($uplineCond)->get('str_userincome')->result(); 
				$fieldName="SUM(upline_bonus)";
				$totalBonus=0;
				if(!empty($result))	
				{
					if($result['0']->$fieldName!='')
					{
						$totalBonus=$result['0']->$fieldName;
					}
				}
				return $totalBonus;
		}
		public function chkBinaryInDays($userId)
		{
			$backDate=date('Y-m-d', strtotime('-7 days'));
			$result=$this->db->select('income_id')->where(array('date(created_date) >='=>$backDate,'user_id'=>$userId))->get('str_userincome')->result();
			return $result;
			die;
		}
		
		public function uplineIncomeCode($userId,$binaryIncome)
		{
			$commDate=$this->stratCommDate();
			$getUniqueCode=getUniqueIdById($userId); 
			$getAllReferalResult=$this->db->select('member_id')->where('referrer_id',$getUniqueCode)->where('upgrade_date',$commDate)->get('str_member')->result();
			
			$totalBinaryUser=array();
			if(!empty($getAllReferalResult))
			{
				 foreach($getAllReferalResult as $getAllReferalResultKey=>$getAllReferalResultValue)
				{
					$chkUserBinary=$this->chkBinaryInDays($getAllReferalResultValue->member_id);
					if(!empty($chkUserBinary))
					{
						$totalBinaryUser[]=$getAllReferalResultValue->member_id;
					}
				}
		 	}
			
			
			/*===Given upline Bonus===*/
			
			 
			if(!empty($totalBinaryUser))
			{
				$govtTax=$this->getTdsRatio();
				$AdminTax=$this->getAdminTaxRatio(); 
				$uplineratio=$this->getUplineTaxRatio(); 
				
				$uplineAmount=round((($binaryIncome*$uplineratio)/100),2);
				
				$eligUplineUser=count($totalBinaryUser);
				$createdAmount=round(($uplineAmount/$eligUplineUser),2);
				foreach($totalBinaryUser as $totalBinaryUser)
				{
					$alreadyGivenUpline=$this->totalUserUplineBonus($totalBinaryUser);
					$incomeCond=array(
						'user_id'=>$totalBinaryUser,
						'date(created_date)'=>date("Y-m-d"),
					);
					$cchkCurrentIncome=$this->db->select('income_id,upline_bonus,gross_amount')->where($incomeCond)->get('str_userincome')->row();
					
					
					if(!empty($cchkCurrentIncome) && $cchkCurrentIncome->upline<$createdAmount)
					{
						
						$grossAmount=($cchkCurrentIncome->gross_amount)+$createdAmount; 
						
							/*===calculation of Govt.Tax  Amount==*/
							$createdtds_Amount=0;
							$createdtds_Amount=round((($grossAmount*$govtTax)/100),2);
							
							/*===calculation of Admin.Tax  Amount==*/
							$createdAdmin_Amount=0;
							$createdAdmin_Amount=round((($grossAmount*$AdminTax)/100),2);
							
							/*===calculation of Net Amount  Amount==*/
							$netAmount=0;
							$netAmount=$grossAmount-($createdtds_Amount+$createdAdmin_Amount);
							
							$incomeArray=array(
								'user_id'=>$userId,     
								'upline_bonus'=>$createdAmount,
								'gross_amount'=>$grossAmount,
								'tds_amount'=>$createdtds_Amount,
								'admin_amount'=>$createdAdmin_Amount,
								'net_amount'=>$netAmount,
							);
							
							/*==Insert wallet data==*/
						 $alreadyGivenTotalBonus=$cchkCurrentIncome->upline;
						$newWalletAmount=$createdAmount-$alreadyGivenTotalBonus;
						$this->addMoneyInWallet($userId,'6','cr',$newWalletAmount);	
						
						$this->update_data('str_userincome',$incomeArray,'income_id',$cchkCurrentIncome->income_id);
					  }
				}
			 		
			}	
		}
		
		/*==end upline income code==*/
		
		/*===club code===*/
		
		public function totalSilverClubIncome($userId)
		{
			$totalAmount=0;
			$result=$this->db->select('SUM(amount)')->where(array('particular_id'=>'7','user_id'=>$userId))->get('str_clubincome')->result(); 
			$fieldName="SUM(amount)";
			if(!empty($result))	
			{
				if($result['0']->$fieldName!='')
				{
					$totalAmount=$result['0']->$fieldName;
				}
			}
			
			return $totalAmount;
		}
		
		public function getTotalTurnover($startDate,$endDate)
		{
			$totalAmount='0.00';
			$result=$this->db->select('SUM(package_amount) as totalAmount')->where(array('date(created_date) >='=>$startDate,'date(created_date) <='=>$endDate))->get('str_turnover_detail')->row(); 
			
			if(!empty($result))	
			{
				if($result->totalAmount!='')
				{
					$totalAmount=$result->totalAmount;
				}
			}
			return $totalAmount;
		 }
		 
		 public function getTotalreferalBv($unique_id)
		 {
			 $commDate=$this->stratCommDate();
			 $fieldName="SUM(business_volume)";
			$totalAmount=0;
			$result=$this->db->select('SUM(business_volume)')->where(array('status'=>'1','referrer_id'=>$unique_id,'business_volume >='=>'500','upgrade_date>='=>$commDate))->get('str_member')->row(); 
			 
			 if(!empty($result))	
			{
				if($result->$fieldName!='')
				{
					$totalAmount=$result->$fieldName;
				}
			}
			return $totalAmount;
		 }
		 
	 public function getsilverBonusRatio()
	{
		$silverRatio='0';
		$silver=$this->db->select('percentage')->where('ratio_id','7')->get('str_incomeratio')->row();
		if(!empty($silver))
		{
			if($silver->percentage)
			{
				$silverRatio=$silver->percentage;
			}
		}
		return $silverRatio;
	}
	
	 public function getstarBonusRatio()
	{
		$starRatio='0';
		$star=$this->db->select('percentage')->where('ratio_id','8')->get('str_incomeratio')->row();
		if(!empty($star))
		{
			if($star->percentage)
			{
				$starRatio=$star->percentage;
			}
		}
		return $starRatio;
	}
	
	 public function getemerldBonusRatio()
	{
		$emerldRatio='0';
		$emerld=$this->db->select('percentage')->where('ratio_id','9')->get('str_incomeratio')->row();
		if(!empty($emerld))
		{
			if($emerld->percentage)
			{
				$emerldRatio=$emerld->percentage;
			}
		}
		return $emerldRatio;
	}
	
	public function chkUserClubIncome($userId,$clubId)
	{ 
		$amount=0;
		$fieldName="SUM(amount)";
		$result=$this->db->select('SUM(amount)')->where(array('user_id'=>$userId,'particular_id'=>$clubId))->get('str_wallet')->row();
		 
		if(!empty($result))
		{
			if($result->$fieldName!='' && $result->$fieldName>0)
			{
				$amount=$result->$fieldName;
			} 
		}
		else
		{
			$amount="0.00";
		}
		return $amount;
	}
	
	/*==get start comm date===*/
	
	public function stratCommDate()
	{
		$result=$this->db->where('comm_id','1')->get('str_startcommdate')->row();
		return $result->comm_date;
	}
	 
	
	/*===Get total cr balance===*/
	
	public function totalCrBalance($userId)
	{
	    $balance=0;
	    $result=$this->db->select('SUM(net_amount)')->where('status','SUCCESS')->where('user_id',$userId)->where('type','cr')->get('str_wallet')->row();
	    $field='SUM(net_amount)';
	    if(!empty($result))
	    {
	        if($result->$field!='')
	        {
	            $balance=$result->$field;
	        }
	    }
	    
	    return $balance;
	}
	
	public function totalUserIncome($userId)
	{ 
	    $result=$this->Form_model->getRowResult('SUM(amount) as amount','str_wallet',array('user_id'=>$userId,'type'=>'cr','status'=>'SUCCESS'));
  
	    return (float) $result['amount'];
	}
	
	public function totalGrossBalance($userId)
	{
	    $balance=0;
		
	    $result=$this->Form_model->getRowResult('SUM(amount) as amount','str_wallet',array('user_id'=>$userId,'type'=>'cr','status'=>'SUCCESS'));
 
	    if($result['amount']!='')
	    { 
			$balance=$result['amount']; 
	    }
	    
	    return $balance;
	}
		
	public function confirmGrossBalance($userId)
	{
	    $balance=0; 
		
	    $result=$this->getRowResult('SUM(amount) as amount','str_wallet',array('type'=>'dr','status'=>'SUCCESS','user_id'=>$userId));
 
	     if($result['amount']!='')
	    { 
			$balance=$result['amount']; 
	    }
	    
	    return $balance;
	}
	
	public function totalWithdrwalBalance($userId)
	{
	    $balance=0; 
		
	    $result=$this->getRowResult('SUM(amount) as amount','str_wallet',array('type'=>'dr','status'=>'SUCCESS','user_id'=>$userId));
 
	    if((float) $result['amount']>0)
	    { 
			$balance=$result['amount']; 
	    }
	    
	    return $balance;
	}
	
	public function getUserWithdrawlBalance($userId)
	{
	    $balance=0; 
		
	    $result=$this->getRowResult('SUM(amount) as amount','str_wallet',array('type'=>'dr','status !='=>'FAILED','user_id'=>$userId,'particular_id'=>'12'));
 
	    if((float) $result['amount']>0)
	    { 
			$balance=$result['amount']; 
	    }
	    
	    return $balance;
	}
	
	public function confirmPendingBalance($userId)
	{
	    $balance=0; 
		
		$result=$this->getRowResult('SUM(amount) as amount','str_wallet',array('type'=>'dr','status'=>'PENDING','user_id'=>$userId));
 
	    if($result['amount']!='')
	    { 
			$balance=$result['amount']; 
	    }
	    
	    return $balance;
	}
	
	
	public function confirmBalance($userId)
	{
	    $balance=0;
		 
		$result=$this->Form_model->getRowResult('SUM(amount) as amount','str_wallet',array('type'=>'dr','status'=>'SUCCESS','user_id'=>$userId));
	 
	    if((float) $result['amount']>0)
	    {
	        $balance=$result['amount'];
	    }
	    
	    return $balance;
	}
	
	public function totalNetPayable($userId)
	{
		$totalIncome=$this->totalUserIncome($userId); 		
		$withAmount=$this->totalWithdrwalBalance($userId); 
		$pendingAmount=$this->confirmPendingBalance($userId);
		
		$finalAmount=$totalIncome-($withAmount+$pendingAmount);
		
		return $pendingAmount;
	}
	
	public function getParticularName($id)
	{
	    $name='No Filled';
		
	    $result=$this->db->where('particular_id',$id)->get('str_particularname')->row();
		
	    if(!empty($result))
	    {
	        if($result->name!='')
	        {
	            $name=ucfirst($result->name);
	        }
	    }
		
	    return $name;
	}
	
	 public function createdTotalPairOfUser($userId)
	 {
		$result=$this->db->select('SUM(net_pairs) as totalPairs')->where('user_id',$userId)->get('str_userincome')->row(); 
		 
		$totalPairs=0;
		if(!empty($result) && $result->totalPairs>0)
		{
			$totalPairs=$result->totalPairs;
		}
		return $totalPairs;
	 }
	 
	 
	 /*====Check already given Reward===*/
	 
	 public function checkAlreadyGivenReward($type,$userId)
	 {
		 $result=$this->db->select('reward_id')->where(array('user_id'=>$userId,'reward_type'=>$type))->get('achieve_reward')->result();
		 
		 if(!empty($result))
		 {
			 return "1";
		 }
		 else
		 {
			 return "0";
		 }
	 }
	 
	 
	 public function getTotalbusinessVolumeById($userid,$memberDate='')
	 {
		 $amount='0';
		 $result='';
		 if($memberDate!='')
		 {
			 $activeDate=$this->db->where('member_id',$userid)->get('str_member')->row()->active_date;
			 
			 if($activeDate>=$memberDate)
			 {
				 
			  $result=$this->db->select('business_amount')->where('user_id',$userid)->get('str_turnover_detail')->row()->business_amount;
			 }
		}
		 else
		 {
			  $result=$this->db->select('business_amount')->where('user_id',$userid)->get('str_turnover_detail')->row()->business_amount;
		 }
		
		if($result!='')
		{
			$amount=$result;
		}
		return $amount;
	 }
	 

	 
	function getTotalLeftBusinessVolume($uniqueId,$side)
	{
		$leftChild=getBothleftAndrightChild($uniqueId,$side);
		
		 $totalLeftPv=0;
		 if(!empty($leftChild))
		 {
			 foreach($leftChild as $leftChild)
			 {
				 $memberId='0';
				 $memberId=getIdByUniqueId($leftChild[0]);
				 $totalLeftPv+=$this->getTotalbusinessVolumeById($memberId);
			 }
		 }
		 
		 return $totalLeftPv;
	}
	
	function getTotalRepurchaeBv($uniqueId,$side)
	{
		$sideChild=getBothleftAndrightChild($uniqueId,$side);
		
		$amount=0;
		
		if(!empty($sideChild))
		{
			foreach($sideChild as $sideChildValue)
			{
				$userId=getIdByUniqueId($sideChildValue[0]);
				
				$productResult=$this->db->select('SUM(dealer_price) as total')->where('user_id',$userId)->get('repurchase_product')->row_array();
				
				$amount+=(float)$productResult['total'];
			}
		}
		
		return $amount;
	}

	
	function showTreeMemberInfo($userId)
	{
		
		$result=$this->getRowResult('name,referrer_id,created_date,unique_id','str_member',array('unique_id'=>$userId)); 
 
		$data=array(
			'name'=>ucfirst($result['name']),
			'sponsor_id'=>$result['referrer_id'], 
			'doj'=>date("d/m/Y", strtotime($result['created_date'])), 
			'unique_id' => $result['unique_id'],
		);
		
		return $data;
	}
	
	public function totalUserWalletAmount($userId)
	{
		$amount='0';
		
		$result=$this->db->select('SUM(amount) as total')->where(array('date(created_date)'=>date("Y-m-d"),'user_id'=>$userId))->get('str_wallet')->row()->total;
		
		if($result!='')
		{
			$amount=$result;
		}
		
		return $amount;
	}
	
	
	public function getUserCapping($userId)
	{
		$amount='0';
		$result=$this->db->select('pv_value')->where('member_id',$userId)->get('str_member')->row()->pv_value;
		if($result!='')
		{
			$amount=$result;
		}
		return $amount;
	}
	
	public function getTotalUserPurchase($userId)
	{
		$productResult=$this->db->select('SUM(dealer_price) as total')->where('user_id',$userId)->get('repurchase_product')->row_array();
				
		return $productResult['total'];
		
		die;
	}
	
	public function getProductAmountById($productId,$qty)
	{
		$price=0;$dpPrice=0;$bvPrice=0;
		 
		$productArray=array_filter($productId);
		$qtyArray=array_filter($qty);

		if(!empty($productArray) && (count($productArray)==count($qtyArray)))
		{ 
	
			$index=0;
			
			foreach($productArray as $productArrayValue)
			{
				$result=$this->db->where('id',$productArrayValue)->get('products')->row_array();
				
				if(!empty($result))
				{
					$price+=(((float)($result['price']))*((int) $qtyArray[$index]));
					$dpPrice+=(((float)($result['dealer_price']))*((int) $qtyArray[$index]));
					$bvPrice+=(((float)($result['business_volume']))*((int) $qtyArray[$index]));
				}
				
				$index++;
			}		 
		}
		
		$data=array(
			'price'=>(float) $price,
			'dealer_price'=>(float) $dpPrice,
			'business_volume'=>(float) $bvPrice,
		);
			
		return $data;
	}
	
	function getRankName($userId)
	{
		$totalBinaryPair=$this->db->select('SUM(net_pairs) as total')->where('user_id',$userId)->get('str_userincome')->row()->total;
		
		if($totalBinaryPair>=20000 && $totalBinaryPair<50000)
		{
			return "Rising Star"; 
		}
		elseif($totalBinaryPair>=50000 && $totalBinaryPair<200000)
		{
			return "Star"; 
		}
		elseif($totalBinaryPair>=200000 && $totalBinaryPair<500000)
		{
			return "Silver"; 
		}
		elseif($totalBinaryPair>=500000 && $totalBinaryPair<1000000)
		{
			return "Gold"; 
		}
		elseif($totalBinaryPair>=1000000 && $totalBinaryPair<2000000)
		{
			return "Platinum"; 
		}
		elseif($totalBinaryPair>=2000000 && $totalBinaryPair<5000000)
		{
			return "Ruby"; 
		}
		elseif($totalBinaryPair>=5000000 && $totalBinaryPair<20000000)
		{
			return "Diamond"; 
		}
		elseif($totalBinaryPair>=20000000 && $totalBinaryPair<50000000)
		{
			return "Double Diamond"; 
		}
		elseif($totalBinaryPair>=50000000 && $totalBinaryPair<100000000)
		{
			return "Royal Diamond"; 
		}
		elseif($totalBinaryPair>=100000000 && $totalBinaryPair<200000000)
		{
			return "Blue Diamond"; 
		}
		elseif($totalBinaryPair>=200000000)
		{
			return "Crow Diamond"; 
		}
		else
		{
			return "";
		}
	}
 
	function getFieldValue($field,$table_name,$cond)
	{
		$database=$this->load->database('default', true);		
		$result=$database->select($field)->get_where($table_name,$cond)->row_array();
		$database->close();
		return $result[$field];
	}
 
	function getRowResult($field,$table_name,$cond)
	{
		$database=$this->load->database('default', true);		
		$result=$database->select($field)->get_where($table_name,$cond)->row_array();
		$database->close();
		return $result;
	}
 
	function getAllesult($field,$table_name,$cond)
	{
		$database=$this->load->database('default', true);		
		$result=$database->select($field)->get_where($table_name,$cond)->result_array();
		$database->close();
		return $result;
	}
 
	function getRowResultLimitOrderBy($field,$table_name,$cond,$ordercol,$order_by,$limit)
	{
		$database=$this->load->database('default', true);		
		$result=$database->select($field)->order_by($ordercol,$order_by)->limit($limit)->get_where($table_name,$cond)->result_array();
		$database->close();
		return $result;
	}
	
	function insertData($table_name,$data)
	{
		$database=$this->load->database('default',true);
		$database->insert($table_name,$data);
		$id=$database->insert_id();
		$database->close();
		return $id;
	}
	
	function updateData($whrcol,$whrcolVal,$table_name,$data)
	{
		$database=$this->load->database('default',true);
		$database->where($whrcol,$whrcolVal)->update($table_name,$data); 
		$database->close();
		return $id;
	}
	
	function insertDatatInRajasthanTour($unique_id,$referanceId,$table)
	{	 
		$database=$this->load->database('default',true);
		
		$memberResult=$this->Form_model->getRowResult('id,left_id,right_id','rajasthan_tree',array('unique_id'=>$referanceId));
	
		if($memberResult['left_id']=='')
		{
			$this->db->where('id',$memberResult['id'])->update($table,array('left_id'=>$unique_id));
		}
		else if($memberResult['right_id']=='')
		{
			$this->db->where('id',$memberResult['id'])->update($table,array('right_id'=>$unique_id));
		}
		else
		{	
			$teamResult=$this->totalTeam($memberResult['left_id'],$memberResult['right_id']);
 
			if(empty($teamResult))
			{
				$this->db->where('unique_id',$memberResult['left_id'])->update($table,array('left_id'=>$unique_id));
			}
			else
			{
				foreach($teamResult as $teamResultValue)
				{
					if($teamResultValue['1']=='')
					{	 
						$this->db->where('unique_id',$teamResultValue['0'])->update($table,array('left_id'=>$unique_id));
						break;
					}
					else if($teamResultValue['2']=='')
					{	 
						$this->db->where('unique_id',$teamResultValue['0'])->update($table,array('right_id'=>$unique_id));
						break;
					}
				}
			}
		} 
		$database->insert($table,array('unique_id'=>$unique_id));
		
		$database->close(); 
	}
	
	function insertDatatInBinaryTree($unique_id,$table)
	{	 
		$database=$this->load->database('default',true);
 
		$cond="(left_id IS NULL OR center_id IS NULL OR right_id IS NULL OR fourth_id IS NULL)";
			 
		$result=$database->where($cond)->get($table)->row_array(); 
		
		if(!empty($result))  
		{
			if($result['left_id']=='')
			{
				$this->db->where('id',$result['id'])->update($table,array('left_id'=>$unique_id));
			}			
			else if($result['left_id']!='' && $result['center_id']=='' && $result['right_id']=='' && $result['fourth_id']=='')
			{
				$this->db->where('id',$result['id'])->update($table,array('center_id'=>$unique_id));
			}			
			else if($result['left_id']!='' && $result['center_id']!='' && $result['right_id']=='' && $result['fourth_id']=='')
			{
				$this->db->where('id',$result['id'])->update($table,array('right_id'=>$unique_id));
			}			
			else if($result['left_id']!='' && $result['center_id']!='' && $result['right_id']!='' && $result['fourth_id']=='')
			{
				$this->db->where('id',$result['id'])->update($table,array('fourth_id'=>$unique_id));
			} 
		}	
		
		$database->insert($table,array('unique_id'=>$unique_id));
		
		$database->close(); 
	}
	
	// CREATE TEAM STRUCTURE FOR RAJASTHAN TREE
	
	function totalTeam($leftId,$rightId)
	{
		$leftResult=$this->getChild($leftId,'left');  
		$rightResult=$this->getChild($rightId,'right'); 
		$final=array_merge($leftResult,$rightResult);   
		
		$arr2 = $this->array_msort($final, array('5'=>SORT_ASC,'4'=>SORT_ASC,'3'=>SORT_ASC));
		 
		return $arr2;
	}
	
	function array_msort($array, $cols)
	{
		$colarr = array();
		foreach ($cols as $col => $order) {
			$colarr[$col] = array();
			foreach ($array as $k => $row) { $colarr[$col]['_'.$k] = strtolower($row[$col]); }
		}
		$eval = 'array_multisort(';
		foreach ($cols as $col => $order) {
			$eval .= '$colarr[\''.$col.'\'],'.$order.',';
		}
		$eval = substr($eval,0,-1).');';
		eval($eval);
		$ret = array();
		foreach ($colarr as $col => $arr) {
			foreach ($arr as $k => $v) {
				$k = substr($k,1);
				if (!isset($ret[$k])) $ret[$k] = $array[$k];
				$ret[$k][$col] = $array[$k][$col];
			}
		}
		
		return array_values($ret);

	}
	
	function getChild($unique_id,$side)
	{
		$treeResult=$this->getAllesult('*','rajasthan_tree',array());
		 
		 foreach($treeResult as $key=>$value)
		 { 
			$data['unique_id']=$value['unique_id'];
			$data['left']=$value['left_id']; 
			$data['right']=$value['right_id']; 
			$data['date']=$value['created_date']; 
			$rows[]=$data;
		} 
		
		$result=$this->getDirectChild($rows,$unique_id,$level=1,$side);
	 
		 $farray=array();
		 
		  if(!empty($result))
		  {
			  $finarray = array_flatten($result);
			  
				$i=0;$main=0;
				foreach($finarray as $fg){
					if($i%6==0){
						$main=$main+1;
					}
					$farray[$main][]=$fg;
					$i++;
				}
		}  

		return $farray;
	}
	
	function array_orderby()
	{
		$args = func_get_args();
		$data = array_shift($args);
		foreach ($args as $n => $field) {
			if (is_string($field)) {
				$tmp = array();
				foreach ($data as $key => $row)
					$tmp[$key] = $row[$field];
				$args[$n] = $tmp;
				}
		}
		$args[] = &$data;
		call_user_func_array('array_multisort', $args);
		return array_pop($args);
	}

	function getDirectChild(array $elements,$unique_id,$level,$side)
	{
		$branch = array();
	
		foreach($elements as $element)
		{
			$element['side']=$side;
			
			if($element['unique_id']==$unique_id)
			{
				
				$element['level']= $level; 
				$level++;
				
				if($element['left']!='')
				{
					
					$child=$this->getDirectChild($elements,$element['left'],$level,$side);
					
					if($child)
					{
						$element['left_id']=$child;
					} 
					
				}
				
				if($element['right']!='')
				{		 
					$child=$this->getDirectChild($elements,$element['right'],$level,$side);
					
					if($child)
					{
						$element['right_id']=$child;
					} 
						
				}
			
				$branch[] = $element;	 
			}		
		}
		 
		return $branch;
	}
 
	function insertWalletData($userId,$particularId,$type,$amount,$status='SUCCESS',$givenUserId='0',$level='0')
	{
		$database=$this->load->database('default',true);
		
		$tdsAmount=(float) $this->getFieldValue('percentage','str_incomeratio',array('ratio_id'=>'2'));
		$adminAmount=(float) $this->getFieldValue('percentage','str_incomeratio',array('ratio_id'=>'3'));
		
		$tds_amount=round((($amount*$tdsAmount)/100),2);
		$admin_amount=round((($amount*$adminAmount)/100),2);
		$netAmount=$amount-($tds_amount+$admin_amount);
		
		 
		$walletArray=array(
			'user_id'=>$userId, 
			'given_userid'=>$givenUserId,
			'level'=>$level,
			'particular_id'=>$particularId,
			'type'=>$type,
			'amount'=>$amount,
			'tds_amount'=>$tds_amount,
			'admin_amount'=>$admin_amount,
			'net_amount'=>$netAmount,
			'status'=>$status,
		);
		
		$id=0;
		
		if($amount>0)
		{
		    $database->insert('str_wallet',$walletArray);
		    $id=$database->insert_id();
		}
		
		
		$database->close();
		return $id; 
	}
	
		
	function createDirectIncome($unique_id)
	{	  
		$referrerId=0;

		$memberResult=$this->getRowResult('member_id,referrer_id','str_member',array('unique_id'=>$unique_id,'member_id !='=>'1'));
		
		if(!empty($memberResult))
		{
			$referrerResult=$this->getRowResult('member_id','str_member',array('unique_id'=>$memberResult['referrer_id'],'member_id !='=>'1'));
			
			if(!empty($referrerResult))
			{
				$referrerId=$referrerResult['member_id'];
			}
		}
		
		if($referrerId>0)
		{ 
			 $this->insertWalletData($referrerId,'17','cr','100','SUCCESS',$memberResult['member_id']);
		}  		
		
		return $referrerId;
	}
	
	function userTotalBalance($user_id)
	{
		$grossBalance=$this->totalGrossBalance($user_id); 
		$confirmBalance=$this->confirmGrossBalance($user_id); 
		$pendingBalance=$this->confirmPendingBalance($user_id); 
		$finalBalance=($grossBalance-($confirmBalance+$pendingBalance));
		
		return $finalBalance;
	}
	
	function chkTotalReferral($uniqueId)
	{
		$database=$this->load->database('default',true);
		$result=$database->select('COUNT(member_id) as total')->get_where('str_member',array('referrer_id'=>$uniqueId))->row_array();
		$database->close();
		return (int)$result['total'];
	}
 
	function chkWithdrawlCondition($withamount)
	{
		$status=0;$amount=0;
		
		$user_data=$this->session->userdata('user_data');
		
		$rajAmount=$this->totalRajasthanReceiveAmount($user_data['member_id']);
		$natAmount=$this->totalNationalReceiveAmount($user_data['member_id']);
		$interAmount=$this->totalInterNationalReceiveAmount($user_data['member_id']);
		$worldAmount=$this->totalWorldReceiveAmount($user_data['member_id']);
		
		$totalWithdrwalAmount=$this->confirmGrossBalance($user_data['member_id']);
		$totalWithdrwalAmount+=$this->confirmPendingBalance($user_data['member_id']);
		
		$chkAllTeamRoyaltyAch=$this->getRowResult('COUNT(member_id) as total','str_member',array('referrer_id'=>$user_data['unique_id'],'royalty_ach_status'=>'1'));
		
		if($user_data['rajasthan_tour']=='1' && $user_data['national_tour']=='0' && $user_data['international_tour']=='0' && $user_data['world_tour']=='0')
		{	 
			if($rajAmount>400){ $amount+='400'; }else{ $amount+=$rajAmount; }
			
			$finalAmount=$rajAmount-$totalWithdrwalAmount;
			 
			if($finalAmount>=$withamount)
			{
				$status='1';
			}
		}
		else if($user_data['rajasthan_tour']=='1' && $user_data['national_tour']=='1' && $user_data['international_tour']=='0' && $user_data['world_tour']=='0')
		{
			$amount+=$rajAmount;
			
			$royaltyResult=$this->getRowResult('COUNT(member_id) as total','str_member',array('referrer_id'=>$user_data['unique_id'],'royalty_ach_status'=>'1','royalty_ach_date >'=>$user_data['national_ach_date']));
				
			if($royaltyResult['total']>='1' && $chkAllTeamRoyaltyAch['total']>='1')
			{ 
				if($natAmount>2000){ $amount+='2000'; }else{ $amount+=$natAmount; }
			}
			
			$finalAmount=($amount-$totalWithdrwalAmount);
			
			if($finalAmount>=$withamount)
			{
				$status='1';
			}
		}
		else if($user_data['rajasthan_tour']=='1' && $user_data['national_tour']=='1' && $user_data['international_tour']=='1' && $user_data['world_tour']=='0')
		{	 
			$amount+=$rajAmount;

			// calculation national Amount
			
			$royaltyResult=$this->getRowResult('COUNT(member_id) as total','str_member',array('referrer_id'=>$user_data['unique_id'],'royalty_ach_status'=>'1','royalty_ach_date >'=>$user_data['national_ach_date']));
			 
			if($royaltyResult['total']>='1'  && $chkAllTeamRoyaltyAch['total']>='1')
			{ 
				$amount+=$natAmount;
			}
			
			// calculation international Amount
			
			$royaltyResult=$this->getRowResult('COUNT(member_id) as total','str_member',array('referrer_id'=>$user_data['unique_id'],'royalty_ach_status'=>'1','royalty_ach_date >'=>$user_data['international_ach_date']));
 	 			 
			if($royaltyResult['total']>='2'   && $chkAllTeamRoyaltyAch['total']>='3')
			{
				if($interAmount>20000){ $amount+='20000'; }else{ $amount+=$interAmount; }
			}
			
			$finalAmount=($amount-$totalWithdrwalAmount);
			
			if($finalAmount>=$withamount)
			{
				$status='1';
			}
			
		}
		else if($user_data['rajasthan_tour']=='1' && $user_data['national_tour']=='1' && $user_data['international_tour']=='1' && $user_data['world_tour']=='1')
		{ 
			$amount+=$rajAmount;

			// calculation national Amount
			
			$royaltyResult=$this->getRowResult('COUNT(member_id) as total','str_member',array('referrer_id'=>$user_data['unique_id'],'royalty_ach_status'=>'1','royalty_ach_date >'=>$user_data['national_ach_date']));
			 
			if($royaltyResult['total']>='1'  && $chkAllTeamRoyaltyAch['total']>='1' )
			{ 
				$amount+=$natAmount;
			}
			
			// calculation international Amount
			
			$royaltyResult=$this->getRowResult('COUNT(member_id) as total','str_member',array('referrer_id'=>$user_data['unique_id'],'royalty_ach_status'=>'1','royalty_ach_date >'=>$user_data['international_ach_date']));
				 
				
			if($royaltyResult['total']>='2'  && $chkAllTeamRoyaltyAch['total']>='3')
			{
				$amount+=$interAmount;
			}
			
			// calculation World Amount
			
			$royaltyResult=$this->getRowResult('COUNT(member_id) as total','str_member',array('referrer_id'=>$user_data['unique_id'],'royalty_ach_status'=>'1','royalty_ach_date >'=>$user_data['world_ach_date']));
			 
				
			if($royaltyResult['total']>='3' && $chkAllTeamRoyaltyAch['total']>='6')
			{
				$amount+=$worldAmount;
			}
		 
			$finalAmount=($amount-$totalWithdrwalAmount);
			
			if($finalAmount>=$withamount)
			{
				$status='1';
			}	
		} 
		
		return $status;
		die;
	}
	
	function getTotalReferer($uniqueId,$table_name)
	{
		$total=0;
		
		$database=$this->load->database('default',TRUE);
		
		$result=$database->select('COUNT(str_member.member_id) as total')->join($table_name,''.$table_name.'.unique_id=str_member.unique_id')->get_where('str_member',array('str_member.referrer_id'=>$uniqueId))->row_array(); 
 
		return (int) $result['total'];
	}
	
	function getTotalRoyalty($memberId,$table_name)
	{
		if($table_name=='world_tree')
		{
			$cond="user_id='".$memberId."' and particular_id='31'  and status='SUCCESS'";
		}
		else if($table_name=='international_tree')
		{
			$cond="user_id='".$memberId."' and particular_id='30'  and status='SUCCESS'";
		}
		else if($table_name=='national_tree')
		{
			$cond="user_id='".$memberId."' and particular_id='29'  and status='SUCCESS'";
		}
		else
		{
			$cond="user_id='".$memberId."' and particular_id='28'  and status='SUCCESS'";
		}

		$result=$this->getRowResult('SUM(amount) as total','str_wallet',$cond);
		
		return (float)$result['total'];
	}
	
	function getTotalDirectLevelIncome($memberId,$table_name)
	{
		$cond="user_id='0'";
		
	    if($table_name=='star_pool')
		{
			$cond="user_id='".$memberId."' and particular_id='21'  and status='SUCCESS'";
		}
	   else if($table_name=='silver_pool')
		{
			$cond="user_id='".$memberId."' and particular_id='33'  and status='SUCCESS'";
		}
		else if($table_name=='gold_pool')
		{
			$cond="user_id='".$memberId."' and particular_id='34'  and status='SUCCESS'";
		}
		else if($table_name=='platinum_pool')
		{
			$cond="user_id='".$memberId."' and particular_id='35'  and status='SUCCESS'";
		}
		else if($table_name=='diamond_pool')
		{
			$cond="user_id='".$memberId."' and particular_id='36'  and status='SUCCESS'";
		} 
 
		$result=$this->getRowResult('SUM(amount) as total','str_wallet',$cond);
		
		return (float)$result['total'];
	} 
	
	function getTotalRoyaltyAchiver($table_name)
	{
		$database=$this->load->database('default',true);
 
		$result=$database->select('count(str_member.member_id) as total')->where('str_member.royalty_ach_status','1')->join($table_name,''.$table_name.'.unique_id=str_member.unique_id')->get('str_member')->row_array();
		
		return (float)$result['total'];
	}
	
	function getTotalDirectIncome($userId)
	{  
		$result=$this->getRowResult('sum(amount) as total','str_wallet',array('particular_id'=>'10','status'=>'SUCCESS','user_id'=>$userId));
		return (float)$result['total'];
	}
	
	function getTotalLevelIncome($userId)
	{  
		$result=$this->getRowResult('sum(amount) as total','str_wallet',array('particular_id'=>'21','user_id'=>$userId,'status'=>'SUCCESS'));
		return (float)$result['total'];
	}


	function getTotalDepthincome($userId)
	{  
		$result=$this->getRowResult('sum(amount) as total','str_wallet',array('particular_id'=>'2','user_id'=>$userId,'status'=>'SUCCESS'));
		return (float)$result['total'];
	}

	function getTotalPoolIncome($userId)
	{  
		$result=$this->getRowResult('sum(amount) as total','str_wallet',array('particular_id'=>'1','user_id'=>$userId,'status'=>'SUCCESS'));
		return (float)$result['total'];
	}

	function totalAdminAddedBalance($userId)
	{
		$result=$this->getRowResult('sum(amount) as total','str_wallet',array('particular_id'=>'14','user_id'=>$userId,'status'=>'SUCCESS'));
		
		return (float) $result['total'];
	}
	
	function totalUpgradeAmount($userId)
	{
		$cond="(particular_id='16' or particular_id='25' or particular_id='26' or particular_id='27') and status='SUCCESS' and user_id='".$userId."'";
		
		$result=$this->getRowResult('sum(amount) as total','str_wallet',$cond);
		
		return (float) $result['total'];
	}
	
	function totalRajasthanReceiveAmount($userId)
	{
		$cond="user_id='".$userId."' and (particular_id='17' or particular_id='21'or particular_id='28') and type='cr'  and status='SUCCESS'";
		
		$result=$this->getRowResult('SUM(amount) as total','str_wallet',$cond);
		
		return (int)$result['total'];
	}
	
	function totalNationalReceiveAmount($userId)
	{
		$cond="user_id='".$userId."' and (particular_id='18' or particular_id='22' or particular_id='29')  and type='cr'  and status='SUCCESS'";
		
		$result=$this->getRowResult('SUM(amount) as total','str_wallet',$cond);
		
		return (int)$result['total'];
	}
	
	function totalInterNationalReceiveAmount($userId)
	{
		$cond="user_id='".$userId."' and (particular_id='19' or particular_id='23' or particular_id='30')  and type='cr'  and status='SUCCESS'";
		
		$result=$this->getRowResult('SUM(amount) as total','str_wallet',$cond);
		
		return (int)$result['total'];
	}
	
	function totalWorldReceiveAmount($userId)
	{
		$cond="user_id='".$userId."' and (particular_id='20' or particular_id='24' or particular_id='31')  and type='cr' and status='SUCCESS'";
		
		$result=$this->getRowResult('SUM(amount) as total','str_wallet',$cond);
		
		return (int)$result['total'];
	}
	
			 function MailSentNow1($message,$subject,$to){
     
     
     
     	     $this->load->helper('path');

             $path = set_realpath('web_root/');
			 $fil = 'welcome.docx';

	$config['charset'] = 'utf-8';
	$config['wordwrap'] = TRUE;
	$config['mailtype'] = 'html';
	$this->load->library('email');
	$this->email->initialize($config);
	$this->email->from('info@worldtour200.com', 'World Tour 200');
	$this->email->to($to);
	$this->email->subject($subject);
	$this->email->message($message);
	$this->email->attach($path.$fil);
	$this->email->send();
}
	
	public function checkDayIncome($date,$particular_id)
	{
		$date=date('Y-m-d', strtotime('+1 day', strtotime($date)));
		
		$result=$this->getRowResult('SUM(amount)','str_wallet',array('particular_id'=>$particular_id,'date(created_date)'=>$date,'status'=>'SUCCESS'));
		
		return $result['SUM(amount)'];
		
	}
	 
	function createDirectIncomeWithLevel($table_name,$particular_id,$amount,$uniqueId,$givenUserId)
	{ 
		$result='0';
			 
		$result=$this->createDirectIncome($uniqueId,$table_name);
 
		if($result>0)
		{ 
			 $this->insertWalletData($result,$particular_id,'cr',$amount,'SUCCESS',$givenUserId);
		}  		
	}
	
	function getDirectUserWithLevel($referrerId,$level=1)
	{
		$levelTeam[]=array(
			'unique_id'=>$referrerId,
			'level'=>$level,
		);
		
		$referrerUser=$this->getRowResult('referrer_id','str_member',array('unique_id'=>$referrerId,'referrer_id !='=>'admin'));
				
		if(!empty($referrerUser) && $level<'3')
		{ 
			$level++; 
			 
			$levelTeam[]=$this->getDirectUserWithLevel($referrerUser['referrer_id'],$level);  
		}
		
		return $levelTeam;
	}
	
	function createDirectLevelIncome($table_name,$particular_id,$uniqueId,$givenUserId)
	{
		$levelResult=array(); 
		 
		$database=$this->load->database('default',TRUE);
		 
		$result=$database->select('referrer_id')->where(array('unique_id'=>$uniqueId,'referrer_id !='=>'admin'))->get('str_member')->result_array();
 
		if(!empty($result))
		{
			foreach($result as $value)
			{
				$levelResult[]=$this->getDirectUserWithLevel($value['referrer_id']);
			}
		} 
		 
		 $finarray = array_flatten($levelResult);
			  
			$i=0;$main=0;$farray=array();$directCommAmount=array();
			foreach($finarray as $fg){
				if($i%2==0){
					$main=$main+1;
				}
				$farray[$main][]=$fg;
				$i++;
			}
 
		// calculation of DIRECT Income
		
		if(!empty($farray))
		{
			foreach($farray as $farrayValue)
			{
				if($farrayValue[1]=='2')
				{
					$directCommAmount[]=array(
						'unique_id'=>$farrayValue[0],
						'level'=>$farrayValue[1],
						'amount'=>'50',
					);
				} 
			}
		}
	 
		// add amount in user wallet
			
		  $sum1 = array_reduce($directCommAmount, function ($c, $d) {
				isset($c[$d['unique_id']]) ? $c[$d['unique_id']]['amount'] += $d['amount'] : $c[$d['unique_id']] = $d; 
				return $c;
			});
			 
		if(!empty($sum1))
		{
			foreach($sum1 as $value)
			{
				$memberId=$this->getFieldValue('member_id','str_member',array('unique_id'=>$value['unique_id']));
				
				if((int) $memberId >'1' && $value['amount']>0)
				{
					$this->insertWalletData($memberId,$particular_id,'cr',$value['amount'],'SUCCESS',$givenUserId,$value['level']); 
					
				}
			}
		} 
	}
	
	
	public function createLevelIncome($table_name,$particular_id,$uniqueId,$givenUserId)
	{		 
		 
		 $commMember=array();  
		 $rajasthanResult=$this->Form_model->getAllesult('id,unique_id,left_id as left,center_id as center,right_id as right,fourth_id as fourth,created_date',$table_name,array());

		 if(!empty($rajasthanResult))
		 {	 
			$teamResult=$this->chkTeam($rajasthanResult,$uniqueId,$table_name);

			if(!empty($teamResult))
			{		 
				foreach($teamResult as $teamResultValue)
				{
					$commAmount=0; 
					
					if($teamResultValue[7]<='6' && $table_name=='silver_pool')
					{
						$commAmount='100'; 
					} 
					else if($teamResultValue[7]<='6' && $table_name=='gold_pool')
					{
						$commAmount='400'; 
					}  
					else if($teamResultValue[7]<='6' && $table_name=='platinum_pool')
					{
						$commAmount='1000'; 
					} 
					else if($teamResultValue[7]<='6' && $table_name=='diamond_pool')
					{
						$commAmount='4000'; 
					} 
					
					$commMember[]=array(
						'unique_id'=>$teamResultValue[1],
						'level'=>$teamResultValue[7],
						'amount'=>$commAmount,
					);
				}
			} 			
		 }
	
		 if(!empty($commMember))
		 {
			 // add amount in user normal wallet
			  $sum = array_reduce($commMember, function ($a, $b) {
					isset($a[$b['unique_id']]) ? $a[$b['unique_id']]['amount'] += $b['amount'] : $a[$b['unique_id']] = $b; 
					return $a;
				});
				 
				if(!empty($sum))
				{		 
					foreach($sum as $value)
					{
						$memberId=$this->getFieldValue('member_id','str_member',array('unique_id'=>$value['unique_id']));
						
						if((int) $memberId >='0' && $value['amount']>0)
						{
							$this->insertWalletData($memberId,$particular_id,'cr',$value['amount'],'SUCCESS',$givenUserId,$value['level']);
						}
					}
				} 
		 } 
	 }
	 
	function chkTeam($rows,$parentId,$table_name)
	{
		$tree = $this->createTreeUser($rows,$parentId,$table_name); 

		$farray=array();
		 
		  if(!empty($tree))
		  {
			 $finarray = array_flatten($tree);
			  
			$i=0;$main=0;
			foreach($finarray as $fg){
				if($i%8==0){
					$main=$main+1;
				}
				$farray[$main][]=$fg;
				$i++;
			}
		} 
		
		return $farray;
	} 
	
	function createTreeUser(array $elements, $parentId,$table_name,$level=0)
	{		
		$branch=array();
		
		foreach($elements as $element)
		{ 
			if($element['fourth'] == $parentId)
			{ 	 
				$level++; 
				$element['level']=$level;
				
				$children = $this->createTreeUser($elements, $element['unique_id'],$table_name,$level);						 
				if ($children) { 
					$element[] = $children;					 
				} 	
 
				 if($level=='11')
			    {
			        break;
			    }
				
				$branch[] = $element;	 			
			}
			if($element['right'] == $parentId)
			{ 	 
				$level++; 
				$element['level']=$level;
				
				$children = $this->createTreeUser($elements, $element['unique_id'],$table_name,$level);						 
				if ($children) { 
					$element[] = $children;					 
				} 	
 
				 if($level=='11')
			    {
			        break;
			    }
				
				$branch[] = $element;	 			
			}
			
			if($element['center'] == $parentId)
			{ 	 
				$level++; 
				$element['level']=$level;
				
				$children = $this->createTreeUser($elements, $element['unique_id'],$table_name,$level);						 
				if ($children) { 
					$element[] = $children;					 
				} 	
 
				 if($level=='11')
			    {
			        break;
			    }
				
				$branch[] = $element;	 			
			}
			
			if($element['left'] == $parentId)
			{ 		
				$level++; 
				$element['level']=$level;
			   
				$children = $this->createTreeUser($elements, $element['unique_id'],$table_name,$level);	
				
				if ($children) { 
					$element[] = $children; 
				} 	 
				
			    if($level=='11')
			    {
			        break;
			    }
				
				 $branch[] = $element;	 			
			}  		
		}
		
		return $branch;	 
	}
	
	function getDirectUserTotalTeam($uniqueId,$referrer_id,$created_date,$level='0')
	{ 
		$levelTeam[]=array(
			'unique_id'=>$uniqueId,
			'referrer_id'=>$referrer_id,
			'created_date'=>$created_date,
			'level'=>$level,
		); 
		
		$levelUser=$this->getAllesult('unique_id,referrer_id,starpool_ach_date','str_member',array('referrer_id'=>$uniqueId));
		 
		if(!empty($levelUser))
		{
			$level++;
			
			foreach($levelUser as $levelValue)
			{
				$levelTeam[]=$this->getDirectUserTotalTeam($levelValue['unique_id'],$levelValue['referrer_id'],$levelValue['starpool_ach_date'],$level);
			}
		}
		return $levelTeam;
	}
	
	
	function getUserTotalTeamPoolWise($uniqueId,$tableName)
	{
	    $count=0;
	    
	    if($tableName=='star_pool')
	    {
	        $starPool=$this->getDirectUserTotalTeamNew($uniqueId,'0');
            $starPool=$this->Form_model->setArray($starPool,'8');
            
            $count=count($starPool)-1;
	    }
	    else if($tableName=='silver_pool')
	    {
	        $silverPool=$this->Form_model->getAllesult('id,unique_id,left_id as left,center_id as center,right_id as right,fourth_id as fourth','silver_pool',array());
	        $silverPool=$this->getDirectChildNew($silverPool,$uniqueId,'0','total');
		    $count=count($this->setArray($silverPool))-1;
	    }
	    else if($tableName=='gold_pool')
	    {
        	$goldPool=$this->Form_model->getAllesult('id,unique_id,left_id as left,center_id as center,right_id as right,fourth_id as fourth','gold_pool',array());
    	    $goldPool=$this->getDirectChildNew($goldPool,$uniqueId,'0','total');
		    $count=count($this->setArray($goldPool))-1;
	    }
	    else if($tableName=='platinum_pool')
	    {
	        $platinumPool=$this->Form_model->getAllesult('id,unique_id,left_id as left,center_id as center,right_id as right,fourth_id as fourth','platinum_pool',array());
	        $platinumPool=$this->getDirectChildNew($platinumPool,$uniqueId,'0','total');
		    $count=count($this->setArray($platinumPool))-1;
	    }
	    else if($tableName=='diamond_pool')
	    {
	        $diamondPool=$this->Form_model->getAllesult('id,unique_id,left_id as left,center_id as center,right_id as right,fourth_id as fourth','diamond_pool',array());
	        $diamondPool=$this->getDirectChildNew($diamondPool,$uniqueId,'0','total');
		    $count=count($this->setArrayNew($diamondPool))-1;
	    }
	    
	    return $count;
	}
	
	function setArray($teamResult,$size=8)
	{
		$farray=array();
				 
		 if(!empty($teamResult))
		 {
			$finarray = array_flatten($teamResult);			  
			$i=0;$main=0;
			foreach($finarray as $fg){
				if($i%$size==0){
					$main=$main+1;
				}
				$farray[$main][]=$fg;
				$i++;
			}
		 }
		 
		 return $farray;
	}
	
	
	
	function getDirectChildNew(array $elements,$unique_id,$level,$side)
	{
		$branch = array();
	
		foreach($elements as $element)
		{
			$element['side']=$side;
			
			if($element['unique_id']==$unique_id)
			{
				
				$element['level']= $level; 
				$level++;
				
				if($element['left']!='')
				{
					
					$child=$this->getDirectChildNew($elements,$element['left'],$level,$side);
					
					if($child)
					{
						$element['left_id']=$child;
					} 
					
					if($level=='11')
					{
						//break;
					}
				
				}
				
				if($element['center']!='')
				{
					
					$child=$this->getDirectChildNew($elements,$element['center'],$level,$side);
					
					if($child)
					{
						$element['center_id']=$child;
					} 
					
					if($level=='11')
					{
						//break;
					}
				
				}
				
				if($element['right']!='')
				{		 
					$child=$this->getDirectChildNew($elements,$element['right'],$level,$side);
					
					if($child)
					{
						$element['right_id']=$child;
					} 
					
					if($level=='11')
					{
						//break;
					}
						
				}
				
				if($element['fourth']!='')
				{		 
					$child=$this->getDirectChildNew($elements,$element['right'],$level,$side);
					
					if($child)
					{
						$element['fourth_id']=$child;
					} 
					
					if($level=='11')
					{
						//break;
					}
						
				}
			
				$branch[] = $element;	 
			}		
		}
		 
		return $branch;
	}
	
	function setArrayNew($teamResult,$size=8)
	{
		$farray=array();
				 
		 if(!empty($teamResult))
		 {
			$finarray = array_flatten($teamResult);			  
			$i=0;$main=0;
			foreach($finarray as $fg){
				if($i%$size==0){
					$main=$main+1;
				}
				$farray[$main][]=$fg;
				$i++;
			}
		 }
		 
		 return $farray;
	}
	
	function getDirectUserTotalTeamNew($uniqueId,$level='0')
	{  
		$levelTeam[]=array(
			'unique_id'=>$uniqueId,
			'unique_id1'=>$uniqueId,
			'unique_id3'=>$uniqueId,
			'unique_id4'=>$uniqueId,
			'unique_id5'=>$uniqueId,
			'unique_id6'=>$uniqueId,
			'unique_id6'=>$uniqueId,
			'unique_id7'=>$uniqueId,
			'level'=>$level,
		); 
		
		$levelUser=$this->Form_model->getAllesult('unique_id','str_member',array('referrer_id'=>$uniqueId));
		 
		if(!empty($levelUser))
		{
			$level++;
			
			foreach($levelUser as $levelValue)
			{
				$levelTeam[]=$this->getDirectUserTotalTeamNew($levelValue['unique_id'],$level);
			}
		}
		return $levelTeam;
	}
	
	function getTotalPayHelp($userId)
	{
	    $result=$this->getRowResult('*','help_request',array('help_from'=>$userId,'help_status'=>'2'));
	    
	    $dollor='0';
	    $amount='0';
	    
	    if(!empty($result))
	    {
	         $amount=$result['amount'];
	         $dollor=round(($amount/70),2);
	    }
	    
		$data=array(
			'dollor'=>$dollor,
			'amount'=>$amount,
		);
		
		return $data;
	} 
	
	function getTotalGetHelp($userId)
	{
		$result=$this->getRowResult('sum(amount) as amount','help_request',array('help_to'=>$userId,'help_status'=>'2'));
	    
	    $dollor='0';
	    $amount='0';
	    
	    if(!empty($result))
	    {
	         $amount=$result['amount'];
	         $dollor=round(($amount/70),2);
	    }
	    
		$data=array(
			'dollor'=>$dollor,
			'amount'=>$amount,
		);
		
		return $data;
	} 
	
	function getTotalPendingPayHelp($userId)
	{
		$result=$this->getRowResult('sum(amount) as amount','help_request',array('help_from'=>$userId,'help_status'=>'1'));
	    
	    $dollor='0';
	    $amount='0';
	    
	    if(!empty($result))
	    {
	         $amount=$result['amount'];
	         $dollor=round(($amount/70),2);
	    }
	    
		$data=array(
			'dollor'=>$dollor,
			'amount'=>$amount,
		);
		
		return $data;
	} 
	
	function getTotalPendingGetHelp($userId)
	{
		$result=$this->getRowResult('*','help_request',array('help_to'=>$userId,'help_status'=>'1'));
	    
	    $dollor='0';
	    $amount='0';
	    
	    if(!empty($result))
	    {
	         $amount=$result['amount'];
	         $dollor=round(($amount/70),2);
	    }
	    
		$data=array(
			'dollor'=>$dollor,
			'amount'=>$amount,
		);
		
		return $data;
	} 

	function getBitCoinValue()
	{	  
		
		$ch = curl_init(); 
		curl_setopt($ch, CURLOPT_URL, "https://blockchain.info/tobtc?currency=USD&value=110");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		return $result=curl_exec($ch); 
	}

	function getPoolAmount()
	{
		$crResult=$this->db->select('sum(amount) as crAmount')->get_where('pool_income',array('type'=>'cr'))->row_array();
		$drResult=$this->db->select('sum(amount) as drAmount')->get_where('pool_income',array('type'=>'dr'))->row_array();
	
		return $crResult['crAmount']-$drResult['drAmount'];
	}

	function getTotalTeam($uniqueId)
	{	  
		$uniqueIdResult=$this->db->select('referrer_id,active_status,created_date,')->get_where('str_member',array('unique_id'=>$uniqueId))->row_array();
 
		$count=0;

		if(!empty($uniqueIdResult))
		{
			$downlineResult=$this->getDirectUserTotalTeamAdmin($uniqueId,$uniqueIdResult['referrer_id'],$uniqueIdResult['created_date'],'0',$uniqueIdResult['active_status']);
			$farray=array_values($this->setArray($downlineResult,'5'));

			if(count($farray)>1)
			{
				unset($farray[0]);
				
				foreach($farray as $value){
					if($value[4]=='1'){
						$count++;
					}
				} 
			}
		} 

		return  $count;
	} 

	function getDirectUserTotalTeamAdmin($uniqueId,$referrer_id,$created_date,$level='0',$status)
	{
		$levelTeam[]=array(
			'unique_id'=>$uniqueId,
			'referrer_id'=>$referrer_id,
			'created_date'=>$created_date,
			'level'=>$level,
			'status'=>$status
		);
	 
		$levelUser=$this->getAllesult('unique_id,referrer_id,created_date,active_status','str_member',array('referrer_id'=>$uniqueId));

		if(!empty($levelUser))
		{
			$level++;
			foreach($levelUser as $levelValue)
			{
				$levelTeam[]=$this->getDirectUserTotalTeamAdmin($levelValue['unique_id'],$levelValue['referrer_id'],$levelValue['created_date'],$level,$levelValue['active_status']);
			}
		}
		return $levelTeam;
	}

	function getTotalActiveDirectCount($uniqueId){

		$result=$this->db->select('count(member_id)  as total')->get_where('str_member',array('referrer_id'=>$uniqueId,'status'=>'1','active_status'=>'1'))->row_array();
		return (int) $result['total'];
	}
	
}
?>