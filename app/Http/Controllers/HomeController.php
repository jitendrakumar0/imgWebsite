<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Str;

class HomeController extends Controller
{
    public $users = [];
    public function index()
    {
        // $actual_link = explode("?", URL::current(), 2)[0];
        // dump(URL::current());
        // dd($actual_link);
        // $blogsImages = DB::table('blogs')->where('blog_image','LIKE','%.webp%')->get();
        // $blogsImages = DB::table('blogs')->where('blog_image','LIKE','%.jpg%')->get();
        // $blogsImages = DB::table('blogs')->where('blog_image','LIKE','%.jpeg%')->get();
        // if(!empty($blogsImages->toArray())){
        //     foreach ($blogsImages as $key => $value) {
        //     //    $image_name = str_replace('.webp','.png',$value->blog_image);
        //     //    $image_name = str_replace('.jpg','.png',$value->blog_image);
        //        $image_name = str_replace('.jpeg','.png',$value->blog_image);
        //        DB::table('blogs')->where('id',$value->id)->update(['blog_image'=>$image_name]);
        //     }
        // }
        return view('newimg');
    }
    public function get_routes($addr)
    {
        $view = '';
        // dump($addr);
        // dd($addr=='digital-marketing-services.php');
        if ($addr == 'digital-marketing-services.php') {
            $address = rtrim(rtrim($addr, '.php'), 's');
            $view = $address . '.index';
        } else {
            /*if($addr == 'blog'){
                $this->blog();
            }*/
            $address = rtrim($addr, '.php');
            $view = $address . '.index';
        }

        // dd($view);
        try {
            return view($view);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    public function about_us0()
    {
        return view('about-us0.index');
    }

    public function newimg()
    {
        return view('newimg');
    }

    public function index_seo()
    {
        return view('index-seo');
    }

    public function fantasy_kabaddi_app_development_1()
    {
        return view('fantasy-kabaddi-app-development-1.index');
    }

    public function contact_us()
    {
        return view('contact-us.index');
    }

  //  public function career0()
  //  {
   //     $cdata = DB::table('current_opening')->where('status', 1)->orderBy('serial', 'ASC')->get();
  //      return view('career0.index', compact('cdata'));
  //  }

    public function privacy_policy()
    {
        return view('privacy-policy.index');
    }

    public function case_study(){
        return view('case-study.index');
    }

    public function solution()
    {
        return view('solution.index');
    }

    public function solution_1()
    {
        return view('solution-1.index');
    }

    public function dating()
    {
        return view('dating.index');
    }

    public function solution_list()
    {
        return view('solution-list.index');
    }


    public function case_study_detail(){
        return view('case-study-detail.index');
    }

    public function terms_and_conditions()
    {
        return view('terms-and-conditions.index');
    }
    public function disclaimer()
    {
        return view('disclaimer.index');
    }

    public function mission_and_vision()
    {
        return view('mission-and-vision.index');
    }

    
     public function website_designing_company_in_alwar()
     {
        return view('website-designing-company-in-alwar.index');
     }
	
     public function web_development_company_in_alwar()
     {
        return view('web-development-company-in-alwar.index');
     }

     public function web_development_company_in_jaipur()
     {
        return view('web-development-company-in-jaipur.index');
     }
     public function web_development_company_in_delhi()
     {
        return view('web-development-company-in-delhi.index');
     }
     
	 public function mobile_app_development_company_in_alwar()
     {
        return view('mobile-app-development-company-in-alwar.index');
     }

     public function mobile_app_development_company_in_jaipur()
     {
        return view('mobile-app-development-company-in-jaipur.index');
     }

     public function mobile_app_development_company_in_delhi()
     {
        return view('mobile-app-development-company-in-delhi.index');
     }

     public function ecommerce_website_development_company_in_alwar()
     {
        return view('ecommerce-website-development-company-in-alwar.index');
     }

     public function ecommerce_development_company_in_alwar()
     {
        return view('ecommerce-development-company-in-alwar.index');
     }

     public function ecommerce_development_company_in_jaipur()
     {
        return view('ecommerce-development-company-in-jaipur.index');
     }

     public function ecommerce_development_company_in_delhi()
     {
        return view('ecommerce-development-company-in-delhi.index');
     }
   
     public function about_us()
     {
        return view('about-us.index');
     }

     public function career()
     {
        return view('career.index');
     }

     public function mobileAppDevelopment1()
     {
         return view('mobile-app-development-1.index');
     }

     public function ecommerce_website_development_1()
     {
         return view('ecommerce-website-development-1.index');
     }

     public function portfolio_1()
     {
		 
		 $bgc = '';

        $select = ['location', 'title', 'tagline', 'image', 'tech', 'slug'];
        $portfolios = DB::table('galleries')
            ->where('section_image','!=',NULL)
            ->where('image','!=',NULL)
            ->where('single_image','!=',NULL)
            ->where('tab_status', 1)
            ->orderBy('id', 'DESC')
            ->select($select)
            ->paginate(21);
    
        $portfolio_category = DB::table('portfolio_category')
                                ->join('galleries', 'portfolio_category.id', 'galleries.category')
                                ->where('galleries.section_image','!=',NULL)
                                ->where('galleries.image','!=',NULL)
                                ->where('galleries.single_image','!=',NULL)
                                ->select('portfolio_category.*')
                                ->distinct('portfolio_category.id')
                                ->get();
        return view('portfolio.index', compact('portfolios', 'portfolio_category', 'bgc'));
		 
     }

    //  public function android_application_development_company()
    //  {
    //      return view('android-application-development-company.index');
    //  }

    //  public function ios_app_development_company()
    //  {
    //      return view('ios-app-development-company.index');
    //  }

     public function react_native_app_development()
     {
         return view('react-native-app-development.index');
     }

    //  public function flutter_app_development_company_1()
    //  {
    //      return view('flutter-app-development-company-1.index');
    //  }

     public function hire_android_app_developers()
     {
        return view('hire-android-app-developers.index');
     }

      /*==============New pages Hire Developers ========================*/
    
      public function hire_ios_app_developers()
      {
          return view('hire-ios-app-developers.index');
      }

      public function hire_react_native_app_developers()
      {
          return view('hire-react-native-app-developers.index');
      }

      public function hire_flutter_app_developers()
      {
          return view('hire-flutter-app-developers.index');
      }

      public function hire_reactjs_developers()
      {
          return view('hire-reactjs-developers.index');
      }

      public function hire_nodejs_developers()
      {
          return view('hire-nodejs-developers.index');
      }

      public function hire_java_developers()
      {
          return view('hire-java-developers.index');
      }

      public function hire_php_developers()
      {
          return view('hire-php-developers.index');
      }

      public function hire_web_designer()
      {
          return view('hire-web-designers.index');
      }

      public function hire_angular_developers()
      {
          return view('hire-angularjs-developers.index');
      }

      public function hire_python_developers()
      {
          return view('hire-python-developers.index');
      }


      public function hire_web_developers()
      {
          return view('hire-web-developers.index');
      }

      public function hire_full_stack_developers()
      {
          return view('hire-full-stack-developers.index');
      }

      public function hire_mean_stack_developers()
      {
          return view('hire-mean-stack-developers.index');
      }

      public function hire_mern_tack_developers()
      {
          return view('hire-mern-stack-developers.index');
      }

      public function hire_mobile_app_developers()
      {
          return view('hire-mobile-app-developers.index');
      }

      public function hire_ui_ux_developers()
      {
          return view('hire-ui-ux-developers.index');
      }

    //   public function grocery_app_development_company()
    //   {

    //   }
      
    //       return view('grocery-app-development-company.index');
    //   }

    //   public function food_delivery_app_development_company()
    //   {
    //       return view('food-delivery-app-development-company.index');
    //   }
 
      public function pharmacy_app_development()
      {
          return view('pharmacy-app-development.index');
      }

    //   public function healthcare_app_development_company()
    //   {
    //       return view('healthcare-app-development-company.index');
    //   }

      public function fashion_app_development()
      {
          return view('fashion-app-development.index');
      }

      public function jewellery_app_development()
      {
          return view('jewellery-app-development.index');
      }

      public function b2b_app_development_company()
      {
          return view('b2b-app-development-company.index');
      }
      public function b2c_app_development_company()
      {
          return view('b2c-app-development-company.index');
      }

      public function doctor_on_demand_app_development()
      {
          return view('doctor-on-demand-app-development.index');
      }

      public function hospital_erp_solution()
      {
          return view('hospital-erp-solution.index');
      }

      public function diet_and_nutrition_app_development()
      {
          return view('diet-and-nutrition-app-development.index');
      }

      public function landing_ads()
      {
          return view('landing-ads.index');
      }

      public function fantasy_sports_app_development_company()
      {
          return view('fantasy-sports-app-development-company.index');
      }

      public function mobile_app_development()
      {
          return view('mobile-app-development.index');
      }

      public function mobile_app_development_company()
      {
          return view('mobile-app-development-company.index');
      }

      public function fantasy_sports_app_development_company_1()
      {
          return view('fantasy-sports-app-development-company-1.index');
      }


       public function fitness_app_development()
       {
           return view('fitness-app-development.index');
       }

       
      
     /*==============Services========================*/
      public function hire_dedicated_developers()
      {
          return view('hire-dedicated-developers.index');
      }

        #demo pages
        public function real_estate_demo()
        {
            return view('realestate-demo.index');
        }



      public function casestudy()
       {
           return view('casestudy.index');
       }

       public function casestudy_1()
       {
           return view('casestudy-1.index');
       }

       public function casestudy_2()
       {
           return view('casestudy-2.index');
       }

       public function casestudy_3()
       {
           return view('casestudy-3.index');
       }

       public function casestudy_4()
       {
           return view('casestudy-4.index');
       }
       

       public function ready_to_move()
       {
           return view('ready-to-move.index');
       }
 

    /*==============Services========================*/
    // public function mobileAppDevelopment()
    // {
    //     return view('mobile-app-development.index');
    // }
    public function mobileAppDevelopmentInJaipur()
    {
        return view('mobile-app-development-in-jaipur.index');
    }
    public function webAppDevelopment()
    {
        return view('web-app-development.index');
    }
    public function webDevelopment()
    {
        return view('web-development.index');
    }
    public function webDevelopmentInJaipur()
    {
        return view('web-development-in-jaipur.index');
    }
    public function softwareDevelopment()
    {
        return view('software-development.index');
    }
    public function websiteDesign()
    {
        return view('website-design.index');
    }
    public function services()
    {
        return view('services.index');
    }
    public function seo_services()
    {
        return view('seo-services.index');
    }
    public function social_media_marketing_services()
    {
        return view('social-media-marketing-services.index');
    }
    public function digital_marketing_services()
    {
        return view('digital-marketing-services.index');
    }
    public function pay_per_click()
    {
        return view('pay-per-click.index');
    }
    public function app_store_optimization()
    {
        return view('app-store-optimization-services.index');
    }
    public function long_tail_seo_keyword()
    {
        return view('long-tail-seo-keyword.index');
    }
    public function regular_blog_posts()
    {
        return view('regular-blog-posts.index');
    }
    public function competitor_analysis()
    {
        return view('competitor-analysis.index');
    }
    public function link_building_service()
    {
        return view('link-building-service.index');
    }
    public function on_page_optimization()
    {
        return view('on-page-optimization.index');
    }
    public function brand_awareness()
    {
        return view('brand-awareness.index');
    }
    public function biometric_attendance_software()
    {
        return view('biometric-attendance-software.index');
    }
    public function digital_marketing_agency_in_jaipur()
    {
        return view('digital-marketing-agency-in-jaipur.index');
    }
    public function CRM_software()
    {
        return view('customer-relationship-management-software.index');
    }
    public function corporate_website_design()
    {
        return view('corporate-website-design.index');
    }
    public function api_development()
    {
        return view('api-development.index');
    }
    public function gps_tracking_software()
    {
        return view('gps-tracking-software.index');
    }
    public function third_party_integration()
    {
        return view('third-party-integration.index');
    }
    public function product_review()
    {
        return view('product-review.index');
    }
    public function lead_generation()
    {
        return view('lead-generation.index');
    }
    public function matrimonial_portal_development()
    {
        return view('matrimonial-portal-development.index');
    }
    public function news_portal_development()
    {
        return view('news-portal-development.index');
    }
    public function property_portal_development()
    {
        return view('property-portal-development.index');
    }
    public function financial_portal_development()
    {
        return view('financial-portal-development.index');
    }
    public function education_portal_development()
    {
        return view('education-portal-development.index');
    }
    public function opencart_website_development()
    {
        return view('opencart-website-development.index');
    }
    public function wordpress_website_development()
    {
        return view('wordpress-website-development.index');
    }
    public function static_website_designing()
    {
        return view('static-website-designing.index');
    }
    public function dynamic_website_designing()
    {
        return view('dynamic-website-designing.index');
    }
    public function parallax_web_designing()
    {
        return view('parallax-web-designing.index');
    }
    public function website_redesigning()
    {
        return view('website-redesigning.index');
    }
    public function responsive_web_designing()
    {
        return view('responsive-web-designing.index');
    }
    public function ecommerce_website_design_services()
    {
        return view('ecommerce-website-design-services.index');
    }
    public function local_business_listing_services()
    {
        return view('local-business-listing-services.index');
    }
    public function online_reputation_management()
    {
        return view('online-reputation-management.index');
    }
    public function paid_advertising()
    {
        return view('paid-advertising.index');
    }
    public function user_engagement()
    {
        return view('user-engagement.index');
    }
    public function custom_software_development()
    {
        return view('custom-software-development.index');
    }
    public function woocommerce_website_development()
    {
        return view('woocommerce-website-development.index');
    }
    public function custom_erp_development()
    {
        return view('custom-erp-development.index');
    }
    public function industrial_erp_development()
    {
        return view('industrial-erp-development.index');
    }
    public function mlm_software_development_company()
    {
        return view('mlm-software-development-company.index');
    }
    public function material_management()
    {
        return view('material-management.index');
    }
    public function financial_management()
    {
        return view('financial-management.index');
    }
    public function college_management_software()
    {
        return view('college-management-software.index');
    }
    public function institute_management_software()
    {
        return view('institute-management-software.index');
    }
    public function credit_cooperative_society_software()
    {
        return view('credit-cooperative-society-software.index');
    }
    public function nbfc_software()
    {
        return view('nbfc-software.index');
    }
    public function online_exam_management_software()
    {
        return view('online-exam-management-software.index');
    }
    public function real_estate_management_software()
    {
        return view('real-estate-management-software.index');
    }
    public function hospital_management_software()
    {
        return view('hospital-management-software.index');
    }
    public function hospital_management_software_new()
    {
        return view('hospital-management-software-new.index');
    }
    public function vehicle_rental_software()
    {
        return view('vehicle-rental-software.index');
    }
    public function gym_management_software()
    {
        return view('gym-management-software.index');
    }
    public function ecommerce_website_development()
    {
        return view('ecommerce-website-development.index');
    }
    public function ecommerce_website_development_in_jaipur()
    {
        return view('ecommerce-website-development-in-jaipur.index');
    }
    public function healthcare_app_development()
    {
        return view('healthcare-app-development.index');
    }
    public function grocery_app_development()
    {
        return view('grocery-app-development.index');
    }
    public function taxi_app_development_company()
    {
        return view('taxi-app-development-company.index');
    }
    public function web_portal_development()
    {
        return view('web-portal-development.index');
    }
    public function cms_development()
    {
        return view('cms-development.index');
    }
    public function php_web_development()
    {
        return view('php-web-development.index');
    }
    public function payment_gateway_integration()
    {
        return view('payment-gateway-integration.index');
    }
    public function ecommerce_solutions()
    {
        return view('ecommerce-solutions.index');
    }
    public function android_application_development()
    {
        return view('android-application-development.index');
    }
    public function ios_app_development()
    {
        return view('ios-app-development.index');
    }
    public function ionic_app_development()
    {
        return view('ionic-app-development.index');
    }
    public function payroll_management_software()
    {
        return view('payroll-management-software.index');
    }
    public function inventory_management_software()
    {
        return view('inventory-management-software.index');
    }
    public function elearning_app_development()
    {
        return view('elearning-app-development.index');
    }
    public function institute_website_design()
    {
        return view('institute-website-design.index');
    }
    public function fantasy_stock_market_app_development()
    {
        return view('fantasy-sports-stock-trading-development.index');
    }
    public function fantasy_sports_app_development()
    {
        return view('fantasy-sports-app-development.index');
    }
    public function fantasy_cricket_app_development()
    {
        return view('fantasy-cricket-app-development.index');
    }
    public function fantasy_football_app_development()
    {
        return view('fantasy-football-app-development.index');
    }
    public function fantasy_movie_app_development()
    {
        return view('fantasy-movie-app-development.index');
    }
    public function testimonials()
    {
        $testimonials = DB::table('testimonials')->where('tab_status', 1)->orderBy('id', 'DESC')->get();
        return view('testimonials.index', compact('testimonials'));
    }
    public function online_exam_app_development()
    {
        return view('online-exam-app-development.index');
    }
    public function website_development_company_alwar()
    {
        return view('website-development-company-alwar.index');
    }
    public function school_website_design()
    {
        return view('school-website-design.index');
    }
    public function school_management_software()
    {
        return view('school-management-software.index');
    }

    public function college_website_design()
    {
        return view('college-website-design.index');
    }
    public function rfid_attendance_system_india()
    {
        return view('rfid-attendance-system-india.index');
    }
    public function offshore_web_development_india()
    {
        return view('offshore-web-development-india.index');
    }
    public function nidhi_company_software_kerala()
    {
        return view('nidhi-company-software-kerala.index');
    }
    public function nidhi_company_software()
    {
        return view('nidhi-company-software.index');
    }
    public function food_delivery_app_development()
    {
        return view('food-delivery-app-development.index');
    }
    public function ui_ux_design_services()
    {
        return view('ui-ux-design-services.index');
    }
    public function psd_to_html_conversion()
    {
        return view('psd-to-html-conversion.index');
    }
    public function psd_to_wordpress_conversion()
    {
        return view('psd-to-wordpress-conversion.index');
    }
    public function mobile_app_marketing()
    {
        return view('mobile-app-marketing.index');
    }
    public function request_a_quote()
    {
        return view('request-a-quote.index');
    }
    public function thankyou()
    {
        return view('thankyou.index');
    }
    public function sitemap()
    {
        // blogs

        $blogs = DB::table('blogs')
                    ->join('blog_category', 'blog_category.id', 'blogs.category')
                    ->join('blog_author', 'blog_author.id', 'blogs.blog_author')
                    ->select('blogs.title', 'blogs.urlBlog')
                    ->where('blogs.status', 1)
                    ->get();

        foreach ($blogs as $post) {
            $post->slug = ( asset('blog/'.$post->urlBlog) );
        }
        
        // portfolio

        $portfolios = DB::table('galleries')
                    ->get();

        foreach ($portfolios as $post) {
            
            $post->slug = ( asset('portfolio/'.$post->slug) );
            
        }

        // dd($blogs);

        return view('sitemap.index', compact('blogs', 'portfolios'));
    }
    public function hotel_management_software()
    {
        return view('hotel-management-software.index');
    }
    public function flutter_app_development()
    {
        return view('flutter-app-development.index');
    }

    public function blog1()
    {
        return view('blog1.index');
    }
    /*===============================================*/
    public function blog()
    {

        $value = request()->get('search');

        $bgc = '';
        $blog_category = DB::table('blog_category')
                            ->join('blogs', 'blog_category.id', 'blogs.category')
                            ->select('blog_category.*')
                            ->distinct('blog_category.id')
                            ->get();
                            
        $blogs = DB::table('blogs')
            ->join('blog_category', 'blog_category.id', 'blogs.category')
            ->join('blog_author', 'blog_author.id', 'blogs.blog_author')
            ->select(
                'blog_category.title as blogtitle',
                'blog_category.slugcategory as slugcategory',
                'blog_author.author_name as author_name',
                'blogs.title',
                'blogs.blog_date',
                'blogs.description',
                'blogs.urlBlog',
                'blogs.blog_image',
                'blogs.image_alttag',
                'blogs.image_title',
                'blogs.id'
            )
            ->where('blogs.title', 'like', '%' . $value . '%')
            ->orderBy('blogs.blog_date', 'DESC')
            ->where('blogs.status', 1)
            ->paginate(10);
            // ->get();

            $feature_blogs = DB::table('blogs')
            ->join('blog_category', 'blog_category.id', 'blogs.category')
            ->join('blog_author', 'blog_author.id', 'blogs.blog_author')
            ->select(
                'blog_category.title as blogtitle',
                'blog_category.slugcategory as slugcategory',
                'blog_author.author_name as author_name',
                'blogs.title',
                'blogs.blog_date',
                'blogs.description',
                'blogs.urlBlog',
                'blogs.blog_image',
                'blogs.image_alttag',
                'blogs.image_title',
                'blogs.id'
            )
            ->orderBy('blogs.blog_date', 'DESC')
            ->where('blogs.status', 1)
            ->where('blogs.latest_status', 1)
            ->get();

        return view('blog.index', compact('blog_category', 'blogs', 'bgc', 'feature_blogs'));
    }

    public function blogdetail($id)
    {
        $blog = DB::table('blogs')
            ->join('blog_category', 'blog_category.id', 'blogs.category')
            ->join('blog_author', 'blog_author.id', 'blogs.blog_author')
            ->select('blog_category.title as category_title', 'blog_category.slugcategory as slugcategory', 'blog_author.author_name as author_name', 'blog_author.image as author_image', 'blogs.*')
            ->where('blogs.status', 1)
            ->where('blogs.urlBlog', $id)
            ->first();
        if(!empty($blog)){
            $blogcount = array();
            $blogcount['count'] = $blog->count + 1;
            DB::table('blogs')->where('blogs.status', 1)
            ->where('urlBlog', $id)->update($blogcount);
            $comments = DB::table('blogs')
                ->where('blogs.urlBlog', $id)
                ->join('blog_comment as blc', 'blc.blog_id', 'blogs.id')
                ->where('blc.status', 1)->orderBy('blc.id', 'DESC')->get(['blc.name', 'blc.comment']);
            $blogs = DB::table('blogs')
                ->join('blog_category', 'blog_category.id', 'blogs.category')
                ->join('blog_author', 'blog_author.id', 'blogs.blog_author')
                ->select(
                    'blog_category.title as blogtitle',
                    'blog_category.slugcategory as slugcategory',
                    'blog_author.author_name as author_name',
                    'blogs.title',
                    'blogs.blog_date',
                    'blogs.description',
                    'blogs.urlBlog',
                    'blogs.blog_image',
                    'blogs.image_alttag',
                    'blogs.image_title'
                )
                ->orderBy('blogs.blog_date', 'DESC')
                ->where('blogs.status', 1)
                ->where('blogs.urlBlog','!=', $id)
                ->where('blogs.category', $blog->category)
                ->limit(3)
                ->get();

            $blogsRecent = DB::table('blogs')->select('title','urlBlog')
                ->orderBy('id', 'DESC')
                ->where('status', 1)
                ->where('urlBlog','!=', $id)
                ->limit(5)
                ->get();

            $blog->tags_foo = DB::table('blog_tags')
                                ->select('tags','tags_slug')
                                ->whereIn('id', explode(',', $blog->tags_foo) )
                                ->get();
            return view('blog.view', compact('blog', 'comments', 'blogs', 'blogsRecent'));
        }
        else{
            return view('errors.404');
        }
    }
    public function blogsearch(Request $request)
    {
        $value = request()->get('search');
        $blog_category = DB::table('blog_category')->get();
        $blogs = DB::table('blogs')->join('blog_category', 'blog_category.id', 'blogs.category')->join('blog_author', 'blog_author.id', 'blogs.blog_author')->select('blog_category.title as blogtitle', 'blog_category.slugcategory as slugcategory', 'blog_author.author_name as author_name', 'blogs.title', 'blogs.blog_date', 'blogs.description', 'blogs.urlBlog', 'blogs.blog_image', 'blogs.image_alttag', 'blogs.image_title')
        ->where('blogs.title', 'like', '%' . $value . '%')->orderBy('blogs.blog_date', 'DESC')->where('blogs.status', 1)
        ->paginate(21);
        $content = '';
        foreach ($blogs as $blog) {
            $content .= '<div class="col-lg-6 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                            <div class="row mx-0 py-3 bg-white shadow border h-100">
                                <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                    <img class="img-fluid" src="' . BLOG_IMAGE_URL() . $blog->blog_image . '" alt="' . $blog->image_alttag . '" title="' . $blog->image_title . '">
                                   
                                </div>
                                <a href="' . asset('/') . 'blog/' . $blog->urlBlog . '" class="col-12 fw-bold text-theme1 fs-16 lh-normal pt-2 text-decoration-none">';
            $blogTitle = strip_tags($blog->title);
            $blogTitle = htmlspecialchars($blogTitle);
            if (strlen($blogTitle) > 70) {
                $content .= substr($blogTitle, 0, 70) . '..';
            } else {
                $content .= ($blogTitle);
            }
            $content .= '</a>
                                <div class="col-12 fs-14 text-white fw-bold bg-theme3 py-2 d-flex justify-content-between my-2">
                                   <span> <span class="text-white me-2">By ' . $blog->author_name . ' </span> <span> ' . date('M d, Y', strtotime($blog->blog_date)) . '</span> </span>
                                    <a href="' . asset('/') . 'blog/category/' . $blog->slugcategory . '" class="tag_blog fs-lg-14 fs-12 fw-600 text-decoration-none text-white">' . $blog->blogtitle . '</a>
                                </div>
                                <div class="col-12 fs-14 fw-600">';
            $resvi = $blog->description;
            $resvi = strip_tags($resvi);
            $resvi = htmlspecialchars($resvi);
            if (strlen($resvi) > 120) {
                $content .= substr((($resvi)), 0, 120) . '...';
            } else {
                $content .= (($resvi));
            }
            $content .= '<a class="text-decoration-none text-theme1" href="' . asset('/') . 'blog/' . $blog->urlBlog . '">Read&nbsp;more </a>
                                </div>
                            </div>
                        </div>';
        }
        return $content.$blogs->setPath( url()->previous() )->appends(request()->all())->links();
        die;
        // return view('blog.index',compact('blog_category','blogs'));
    }
    public function blogcategory($id)
    {

        $value = request()->get('search');

        $bgc = DB::table('blog_category')->where('slugcategory', $id)->first();
        if (!empty($bgc)) {
            $blog_category = DB::table('blog_category')
                            ->join('blogs', 'blog_category.id', 'blogs.category')
                            ->select('blog_category.*')
                            ->distinct('blog_category.id')
                            ->get();

            $blogs = DB::table('blogs')
                ->join('blog_category', 'blog_category.id', 'blogs.category')
                ->join('blog_author', 'blog_author.id', 'blogs.blog_author')
                ->select(
                    'blog_category.title as blogtitle',
                    'blog_category.slugcategory as slugcategory',
                    'blog_author.author_name as author_name',
                    'blogs.title',
                    'blogs.blog_date',
                    'blogs.description',
                    'blogs.urlBlog',
                    'blogs.blog_image',
                    'blogs.image_alttag',
                    'blogs.image_title',
                    'blogs.id'
                )
                ->where('blogs.title', 'like', '%' . $value . '%')
                ->orderBy('blogs.blog_date', 'DESC')
                ->whereRaw("find_in_set('".$bgc->id."',blogs.category)")
                ->where('blogs.status', 1)
                ->paginate(10);
                //->get();

                $feature_blogs = DB::table('blogs')
                ->join('blog_category', 'blog_category.id', 'blogs.category')
                ->join('blog_author', 'blog_author.id', 'blogs.blog_author')
                ->select(
                    'blog_category.title as blogtitle',
                    'blog_category.slugcategory as slugcategory',
                    'blog_author.author_name as author_name',
                    'blogs.title',
                    'blogs.blog_date',
                    'blogs.description',
                    'blogs.urlBlog',
                    'blogs.blog_image',
                    'blogs.image_alttag',
                    'blogs.image_title',
                    'blogs.id'
                )
                ->orderBy('blogs.blog_date', 'DESC')
                ->where('blogs.status', 1)
                ->where('blogs.latest_status', 1)
                ->get();            

            return view('blog.index', compact('blog_category', 'blogs', 'bgc', 'feature_blogs'));
        } else {
            return redirect('/blog');
        }
    }

    public function blogtag($id)
    {

        $value = request()->get('search');

        $bgc = DB::table('blog_tags')->where('tags_slug', $id)->first();
        if (!empty($bgc)) {
            $blog_category = DB::table('blog_category')
                            ->join('blogs', 'blog_category.id', 'blogs.category')
                            ->select('blog_category.*')
                            ->distinct('blog_category.id')
                            ->get();

            $blogs = DB::table('blogs')
                ->join('blog_category', 'blog_category.id', 'blogs.category')
                ->join('blog_author', 'blog_author.id', 'blogs.blog_author')
                ->select(
                    'blog_category.title as blogtitle',
                    'blog_category.slugcategory as slugcategory',
                    'blog_author.author_name as author_name',
                    'blogs.title',
                    'blogs.blog_date',
                    'blogs.description',
                    'blogs.urlBlog',
                    'blogs.blog_image',
                    'blogs.image_alttag',
                    'blogs.image_title',
                    'blogs.id',
                    'blogs.tags_foo'
                )
                ->where('blogs.title', 'like', '%' . $value . '%')
                ->orderBy('blogs.blog_date', 'DESC')
                ->whereRaw("find_in_set('".$bgc->id."',blogs.tags_foo)")
                ->where('blogs.status', 1)
                ->paginate(10);
                //->get();

                $feature_blogs = DB::table('blogs')
                ->join('blog_category', 'blog_category.id', 'blogs.category')
                ->join('blog_author', 'blog_author.id', 'blogs.blog_author')
                ->select(
                    'blog_category.title as blogtitle',
                    'blog_category.slugcategory as slugcategory',
                    'blog_author.author_name as author_name',
                    'blogs.title',
                    'blogs.blog_date',
                    'blogs.description',
                    'blogs.urlBlog',
                    'blogs.blog_image',
                    'blogs.image_alttag',
                    'blogs.image_title',
                    'blogs.id'
                )
                ->orderBy('blogs.blog_date', 'DESC')
                ->where('blogs.status', 1)
                ->where('blogs.latest_status', 1)
                ->get();

            return view('blog.index', compact('blog_category', 'blogs', 'bgc', 'feature_blogs'));
        } else {
            return redirect('/blog');
        }
    }
    public function portfolioIndex()
    {
        
        $bgc = '';

        $select = ['location', 'title', 'tagline', 'image', 'tech', 'slug'];
        $portfolios = DB::table('galleries')
            ->where('section_image','!=',NULL)
            ->where('image','!=',NULL)
            ->where('single_image','!=',NULL)
            ->where('tab_status', 1)
            ->orderBy('id', 'DESC')
            ->select($select)
            ->paginate(21);
    
        $portfolio_category = DB::table('portfolio_category')
                                ->join('galleries', 'portfolio_category.id', 'galleries.category')
                                ->where('galleries.section_image','!=',NULL)
                                ->where('galleries.image','!=',NULL)
                                ->where('galleries.single_image','!=',NULL)
                                ->select('portfolio_category.*')
                                ->distinct('portfolio_category.id')
                                ->get();
        return view('portfolio.index', compact('portfolios', 'portfolio_category', 'bgc'));
    }

    public function portfoliosearch(Request $request)
    {
        $value = request()->get('search');
        
        $select = ['location', 'title', 'tagline', 'image', 'tech', 'slug'];
        $portfolios = DB::table('galleries')
            ->where('tab_status', 1)
            ->orderBy('id', 'DESC')
            ->where('galleries.title', 'like', '%' . $value . '%')
            ->where('galleries.section_image','!=',NULL)
            ->where('galleries.image','!=',NULL)
            ->where('galleries.single_image','!=',NULL)
            ->select($select)
            ->paginate(21);
            
        $content = '';

        foreach ($portfolios as $value) {
            $content .= '<div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-12 mb-4">
                            <a href="'.asset('/portfolio/'.$value->slug).'" class="portfolio_page_box d-block shadow" style="--bg:url('.PORTFOLIO_IMAGE_URL($value->image).');">
                            <div class="locations">
                                <span class="locations_icon"><i class="imgr me-1 img-map-marker"></i></span>
                                '.$value->location.'
                            </div>
                            <div class="portfolio_hover">
                                <div class="portfolio_hover_inner">
                                    <div class="fw-900 fs-lg-24 fs-md-19 fs-18 lh-normal">- '.Str::title($value->title).' -</div>
                                    <div class="fw-600 fs-lg-16 fs-md-14 fs-15 mt-2 mb-0">'.$value->tagline.'</div>
                                    <div class="row justify-content-center mt-3 mx-0 portfolio_tags">';
                                        
                                        foreach(GET_TECHNOLOGY($value->tech) as $tech) {
                                            $content .= '<div class="col-auto px-1">
                                                            <span class="tag_port">'.$tech->name.'</span>
                                                        </div>';
                                        }
            $content .= '</div>
                                </div>
                            </div>
                            </a>
                        </div>';
        }
                
        return $content.$portfolios->setPath( url()->previous() )->appends(request()->all())->links();
        die;
        // return view('blog.index',compact('blog_category','blogs'));
    }
    public function portfoliocategory($id)
    {

        $value = request()->get('search');

        $bgc = DB::table('portfolio_category')->where('slugcategory', $id)->first();
        if (!empty($bgc)) {
            $portfolio_category = DB::table('portfolio_category')
                                ->join('galleries', 'portfolio_category.id', 'galleries.category')
                                ->select('portfolio_category.*')
                                ->distinct('portfolio_category.id')
                                ->get();

            $select = ['location', 'title', 'tagline', 'image', 'tech', 'slug','id'];
            $portfolios = DB::table('galleries')
            ->where('tab_status', 1)
            ->where('category', $bgc->id)
            ->orderBy('id', 'DESC')
            ->select($select)
            ->paginate(21);
                //->get();

            return view('portfolio.index', compact('portfolios', 'portfolio_category', 'bgc'));
        } else {
            return redirect('/blog');
        }
    }

    public function portfolioSingle($id)
    {
        $select = ['location', 'title', 'tagline', 'image', 'tech', 'slug'];
        $portfolioData = DB::table('galleries')
            ->where('slug', $id)
            ->where('tab_status', 1)
            ->first();
        if (!empty($portfolioData)) {
            $portfolios = DB::table('galleries')
                ->where('tab_status', 1)
                ->where('slug', '!=', $id)
                ->orderBy('id', 'DESC')
                ->limit(3)
                ->get($select);
            return view('portfolio-single.index', compact('portfolioData', 'portfolios'));
        } else {
            abort('404');
        }
    }

    public function quote_action(Request $request)
    {
        $referral_link = $request->headers->all();
        
        $input = $request->all();
        $json = [];
        if (trim($input['getname']) != '' && trim($input['getnumber']) != '') {
            $insertData = array(
                'name' => $input['getname'],
                'email' => $input['getemail'],
                'phonecode' => $input['country_code'],
                'mobile' => $input['getnumber'],
                'skype' => 'NA',
                'companyname' => 'NA',
                'website' => 'NA',
                'looking' => 'NA',
                'budget' => $input['getbudget'],
                'description' => $input['getdetail'],
                'lazyImage' => 'NA',
                'location' => (isset($referral_link['referer'][0]) ? $referral_link['referer'][0] : '')
            );
            // dump($input);
            // $responseData = VALIDATERECAPTCHA($request->get('g-recaptcha-response'));
            // dump($responseData);
            // if (!$responseData->success) {
            //     $json['error'] = '1';
            //     $json['msg'] = "Please check on the reCAPTCHA box.";
            // } else {
                $file_name = "";
                if (isset($_FILES['getfile']['name']) && !empty($_FILES['getfile']['name'])) {
                    $file_name = "requestqoute-".rand().'.'.pathinfo($_FILES['getfile']['name'], PATHINFO_EXTENSION);
                    $file_size = $_FILES['getfile']['size'];
                    $file_tmp = $_FILES['getfile']['tmp_name'];
                    $file_type = $_FILES['getfile']['type'];
                    //$file_ext = strtolower(end(explode(getfile)));

                    move_uploaded_file($file_tmp, "imgadmin2/assets/images/" . $file_name);
                }
                $insertData['image'] = $file_name;
                $sqlinsertID = DB::table('request_quote')->insertGetId($insertData);

                SMSCURL('test', 'quote');

                $leads = array(
                    'name' => $insertData['name'],
                    'phonecode' => $insertData['phonecode'],
                    'mobile' => $insertData['mobile'],
                    'email' => $insertData['email'],
                    'type' => 'Request Quote',
                    'type_id' => $sqlinsertID,
                    'location' => $insertData['location']
                );
                DB::table('leads')->insert($leads);
				$insertData['number']=$input['getnumber'];

                $json = SENDQUOTEMAIL($insertData, 'prod');
            //}
        } else {
            $json['error'] = '1';
            $json['msg'] = "Please Fill All Mandatory Fields";
        }

        $jsonFinal[] = $json;
        echo json_encode($jsonFinal);
        die;
    }

    public function career_action(Request $request)
    {
        $input = $request->all();
        $json = [];
        $insertData = array(
            'name' => $input['name'],
            'email' => $input['email'],
            'mobile' => $input['phone'],
            'apply_post' => $input['inquiry'],
            'other_post' => (($input['other_inquiry'] != '') ? $input['other_inquiry'] : 'NA'),
            'message' => $input['msg']
        );


        if (trim($insertData['name']) != '' && trim($insertData['email']) != '' && trim($insertData['mobile']) != '' && trim($insertData['message']) && !empty($_FILES)) {

            $responseData = VALIDATERECAPTCHA($request->get('g-recaptcha-response'));
            // dump($responseData);
            if (!$responseData->success) {
                $json['error'] = '1';
                $json['msg'] = "Please check on the reCAPTCHA box.";
            } else {
                $imgError = 0;

                $imgName = '';
                if (isset($_FILES['fileToUpload'])) {
                    $path = $_FILES['fileToUpload']['name'];
                    $ext = pathinfo($path, PATHINFO_EXTENSION);
                    $extensions = array("pdf", "doc", "docx");
                    if (!in_array($ext, $extensions)) {
                        $imgError++;
                    } else {
                        $imgName = "resume" . time() . rand(1, 9999) . '.' . $ext;
                        $file_size = $_FILES['fileToUpload']['size'];
                        $file_tmp = $_FILES['fileToUpload']['tmp_name'];
                        $file_type = $_FILES['fileToUpload']['type'];

                        move_uploaded_file($file_tmp, 'imgadmin2/images/career/' . $imgName);
                    }
                }

                if ($imgError == 0) {
                    $insertData['image'] = $imgName;
                    $sql = DB::table('career')->insertGetId($insertData);


                    SMSCURL('test', 'career');

                    $json['error'] = '0';
                    $json['msg'] = 'Submitted successfully.';
                } else {
                    $json['error'] = '1';
                    $json['msg'] = 'File format must be Pdf or Doc.';
                }
            }
        } else {
            $json['error'] = '1';
            $json['msg'] = "Some error found";
        }

        $jsonFinal[] = $json;
        echo json_encode($jsonFinal);
        die;
    }
    public function contact_action(Request $request)
    {
        $referral_link = $request->headers->all();

        $input = $request->all();
        $json = [];
        $phoneCode = "IN +91";
        if(isset($input['phonecode']) && !empty($input['phonecode'])){          
            $phoneCode = $input['phonecode'];
        } 

        $insertData = array(
            'name' => $input['contactname'],
            'email' => $input['contactemail'],
            'mobile' => $input['contactnumber'],
            'phonecode' => $phoneCode,
            'requirement' => (isset($input['requirement']) ? $input['requirement'] : ''),
            'organization' => (isset($input['organization']) ? $input['organization'] : ''),
            'message' => (isset($input['mmessage']) ? $input['mmessage'] : ''),
            'location' => (isset($referral_link['referer'][0]) ? $referral_link['referer'][0] : ''),
        );

        $mobileregex = "/^[6-9][0-9]{9}$/";
        
        if((!preg_match($mobileregex, $input['contactnumber']) && $phoneCode=='IN +91')){
            $json['error'] = '1';
            $json['msg'] = "Invalid Mobile No.";

        }elseif (trim($insertData['name']) != '' && trim($insertData['mobile']) != '') {

            $responseData = VALIDATERECAPTCHA($request->get('g-recaptcha-response'));
            // if (!$responseData->success) {
            //     $json['error'] = '1';
            //     $json['msg'] = "Please check on the reCAPTCHA box.";
            // } else {
                $sql = DB::table('contact')->insertGetId($insertData);
                $leads = array(
                    'name' => $insertData['name'],
                    'phonecode' => $phoneCode,
                    'mobile' => $insertData['mobile'],
                    'email' => $insertData['email'],
                    'type' => 'Contact',
                    'type_id' => $sql,
                    'location' => $insertData['location'],
                );
                $sql1 = DB::table('leads')->insert($leads);

                SENDCONTACTUSMAIL($insertData, 'prod');
                SMSCURL('test', 'contact');

                $json['error'] = '0';
                $json['msg'] = "Mail Sent successfully.";
           // }
        } else {
            $json['error'] = '1';
            $json['msg'] = "Some error found";
        }

        $jsonFinal[] = $json;
        echo json_encode($jsonFinal);
        die;
    }

    public function digitalform_action(Request $request)
    {
        $referral_link = $request->headers->all();

        $input = $request->all();
        $json = [];
        $phoneCode = "IN +91";
        if(isset($input['phonecode']) && !empty($input['phonecode'])){          
            $phoneCode = $input['phonecode'];
        }
 
        $mobileregex = "/^[6-9][0-9]{9}$/";
        
        if((!preg_match($mobileregex, $input['tel']) && $phoneCode=='IN +91')){
            $json['error'] = '1';
            $json['msg'] = "Invalid Mobile No.";

        }elseif ($input['name'] != '' && $input['tel'] != '' && $input['type'] != '') {
            $insertData = array(
                'name' => $input['name'],
                'email' => $input['email'],
                'phonecode' => $phoneCode,
                'mobile' => $input['tel'],
                'website_url' => (isset($input['website']) ? $input['website'] : ''),
                'type' => $input['type'],
                'location' => (isset($referral_link['referer'][0]) ? $referral_link['referer'][0] : '')
            );

            $responseData = VALIDATERECAPTCHA($request->get('g-recaptcha-response'));
            // if (!$responseData->success) {
            //     $json['error'] = '1';
            //     $json['msg'] = "Please check on the reCAPTCHA box.";
            // } else {
                // $sql_data = collect()
                $type = $insertData['type'];
                unset($insertData['type']);
                $sql = DB::table('digital_enquiary')->insertGetId($insertData);
                $leads = array(
                    'name' => $insertData['name'],
                    'phonecode' => $phoneCode,
                    'mobile' => $insertData['mobile'],
                    'email' => $insertData['email'],
                    'type' => $type,
                    'type_id' => $sql,
                    'location' => $insertData['location']

                );
                $sql1 = DB::table('leads')->insert($leads);

                $insertData['requirement']=$type;
				$insertData['message']=$input['message'];
				
				SENDCONTACTUSMAIL($insertData, 'prod');
            
                $json['error'] = '0';
                $json['msg'] = "Rquest received successfully.";
          //  }
        } else {
            $json['error'] = '1';
            $json['msg'] = "Some error found";
        }

        $jsonFinal[] = $json;
        echo json_encode($jsonFinal);
        die;
    }

    public function PostComment(Request $request){

       
        $rules = [
            'blog_id' => 'required',
            'name' => 'required|string',
            'email' => 'required|email',
            'comment' => 'required|min:3',
        ];

        $validator = \Validator::make($request->all(), $rules);
            
        if ($validator->fails()) {
            $message = [];
            $messages_l = json_decode(json_encode($validator->messages()), true);
            foreach ($messages_l as $msg) {
                $message= $msg[0];
                break;
            }
            
            return response(array("error"=>true, 'message'=>$message), 403);
            
        }else{

            try{

                $comment=new \App\Models\BlogComment();
                $comment->blog_id=$request->post('blog_id');
                $comment->name=$request->post('name');
                $comment->email=$request->post('email');
                $comment->website=$request->post('website') ?? '';
                $comment->comment=$request->post('comment');
                $comment->date_time=date('Y-m-d H:i:s');
                $comment->save();

                return response(array('message'=>'Comment post successfully.'), 200);
                    
            }catch (\Exception $e){

                return response(array("error"=>true, "message" => "Something went wrong.please try again"), 403); 
            }
        }

	}
}
