@extends('main')
@push('meta')
   <!--  Title -->
   <title>Contact Us to Build Your Web and Mobile Application | IMG Global Infotech</title>

   <!-- Required meta tags -->
   <meta name="title" content="Contact Us to Build Your Web and Mobile Application | IMG Global Infotech" />
   <meta name="description" content="Contact us for affordable mobile app development, web development, ecommerce development requirements. You can also contact to hire remote developers for your projects." />
   <meta name="keywords" content="Website Development Design Company in Jaipur , IT Consulting Company in India, Online Reputation Management, Android Apps Development" />

   <!-- Twitter Meta -->
   <meta name="twitter:title" content="Contact Us to Build Your Web and Mobile Application | IMG Global Infotech">
   <meta name="twitter:description" content="Contact us for affordable mobile app development, web development, ecommerce development requirements. You can also contact to hire remote developers for your projects.">
   <meta name="twitter:image" content="{{GETFOLDERPATH()}}/Contact-Us.webp">

   <!-- Facebook Meta -->
   <meta property="og:url" content="{{asset('/')}}contact-us.php">
   <meta property="og:title" content="Contact Us to Build Your Web and Mobile Application | IMG Global Infotech">
   <meta property="og:description" content="Contact us for affordable mobile app development, web development, ecommerce development requirements. You can also contact to hire remote developers for your projects.">
   <meta property="og:image" content="{{GETFOLDERPATH()}}/Contact-Us.webp">
   <meta property="og:image:secure_url" content="{{GETFOLDERPATH()}}/Contact-Us.webp">


   
   <meta name="classification" content="Website Development Design Company in Jaipur , IT Consulting Company in India, Online Reputation Management, Android Apps Development" />
   <link rel="canonical" href="{{asset('/')}}contact-us.php" />
   <meta name="robots" content="index, follow" />
@endpush
@push('styles')
   <link rel="stylesheet" href="{{asset('/public')}}/assets/plugins/do-not-edit/css/contact-us.min.css">
   
@endpush
@section('content')

   <h1 class="d-none">Contact IMG Global Infotech Contact Form Submitted Successfully</h1>

   <!-- get-in-touch section -->
   <div class="container-fluid get-in-touch position-relative pt-5">
      <div class="container position-relative zi-1 pt-5 pb-5">
         <div class="row py-lg-5 py-md-4">
            <div class="col-12 h-100">
               <div class="row align-items-center">
                  <div class="col-lg-7 left_form_part position-relative mt-0">
                     <div class="row bg-white py-md-4 py-3 px-md-2 px-2 left_bg_part">
                        <div class="col-12 pt-3">
                           <div class="from-right-block rows pt-0 pb-4">
                              <form method="post" id="feedInput" name="contactusform" class="row gy-4 homecontactusformValidation" novalidate>
                                 @csrf
                                 <input type="hidden" id="ajxURL" value="{{asset('/contact_action')}}" />
                                 <input type="hidden" id="reUrl" value="{{asset('/thankyou.php')}}" />
                                 <div class="col-md-6">
                                    <div class="form-floating">
                                       <input type="text" class="form-control rounded-0" id="contactName" minlength="1" maxlength="30" placeholder="Enter Contact Name" name="contactname" Required>
                                       <label class="fw-600" for="contactName">Name</label>
                                       <div class="invalid-feedback fs-12">Please Enter Full Name.</div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                                <div class="row">
                                               <div class="col-5 pe-0">
                                                        <select name="phonecode" id="phonecode" class="form-select h-100 rounded-0 brl" aria-label="Default select example" style="padding: 0.375rem 0.25rem 0.375rem 0.75rem !important; border-left: 4px solid #e09c19 !important;">
                                                         <option value="IN +91" selected="selected"> IN +91</option>
                                                         <option value="US +1">US +1</option>
                                                         <option value="AF +93">AF +93</option>
                                                         <option value="AL +355">AL +355</option>
                                                         <option value="DZ +213">DZ +213</option>
                                                         <option value="AS +1-684">AS +1-684</option>
                                                         <option value="AD +376">AD +376</option>
                                                         <option value="AO +244">AO +244</option>
                                                         <option value="AI +1-264">AI +1-264</option>
                                                         <option value="AQ +672">AQ +672</option>
                                                         <option value="AG +1-268">AG +1-268</option>
                                                         <option value="AR +54">AR +54</option>
                                                         <option value="AM +374">AM +374</option>
                                                         <option value="AW +297">AW +297</option>
                                                         <option value="AU +61">AU +61</option>
                                                         <option value="AT +43">AT +43</option>
                                                         <option value="AZ +994">AZ +994</option>
                                                         <option value="BS +1-242">BS +1-242</option>
                                                         <option value="BH +973">BH +973</option>
                                                         <option value="BD +880">BD +880</option>
                                                         <option value="BB +1-246">BB +1-246</option>
                                                         <option value="BY +375">BY +375</option>
                                                         <option value="BE +32">BE +32</option>
                                                         <option value="BZ +501">BZ +501</option>
                                                         <option value="BJ +229">BJ +229</option>
                                                         <option value="BM +1-441">BM +1-441</option>
                                                         <option value="BT +975">BT +975</option>
                                                         <option value="BO +591">BO +591</option>
                                                         <option value="BA +387">BA +387</option>
                                                         <option value="BW +267">BW +267</option>
                                                         <option value="BR +55">BR +55</option>
                                                         <option value="IO +246">IO +246</option>
                                                         <option value="VG +1-284">VG +1-284</option>
                                                         <option value="BN +673">BN +673</option>
                                                         <option value="BG +359">BG +359</option>
                                                         <option value="BF +226">BF +226</option>
                                                         <option value="BI +257">BI +257</option>
                                                         <option value="KH +855">KH +855</option>
                                                         <option value="CM +237">CM +237</option>
                                                         <option value="CA +1">CA +1</option>
                                                         <option value="CV +238">CV +238</option>
                                                         <option value="KY +1-345">KY +1-345</option>
                                                         <option value="CF +236">CF +236</option>
                                                         <option value="TD +235">TD +235</option>
                                                         <option value="CL +56">CL +56</option>
                                                         <option value="CN +86">CN +86</option>
                                                         <option value="CX +61">CX +61</option>
                                                         <option value="CC +61">CC +61</option>
                                                         <option value="CO +57">CO +57</option>
                                                         <option value="KM +269">KM +269</option>
                                                         <option value="CK +682">CK +682</option>
                                                         <option value="CR +506">CR +506</option>
                                                         <option value="HR +385">HR +385</option>
                                                         <option value="CU +53">CU +53</option>
                                                         <option value="CW +599">CW +599</option>
                                                         <option value="CY +357">CY +357</option>
                                                         <option value="CZ +420">CZ +420</option>
                                                         <option value="CD +243">CD +243</option>
                                                         <option value="DK +45">DK +45</option>
                                                         <option value="DJ +253">DJ +253</option>
                                                         <option value="DM +1-767">DM +1-767</option>
                                                         <option value="DO +1-809, 1-829, 1-849">DO +1-809, 1-829, 1-849</option>
                                                         <option value="TL +670">TL +670</option>
                                                         <option value="EC +593">EC +593</option>
                                                         <option value="EG +20">EG +20</option>
                                                         <option value="SV +503">SV +503</option>
                                                         <option value="GQ +240">GQ +240</option>
                                                         <option value="ER +291">ER +291</option>
                                                         <option value="EE +372">EE +372</option>
                                                         <option value="ET +251">ET +251</option>
                                                         <option value="FK +500">FK +500</option>
                                                         <option value="FO +298">FO +298</option>
                                                         <option value="FJ +679">FJ +679</option>
                                                         <option value="FI +358">FI +358</option>
                                                         <option value="FR +33">FR +33</option>
                                                         <option value="PF +689">PF +689</option>
                                                         <option value="GA +241">GA +241</option>
                                                         <option value="GM +220">GM +220</option>
                                                         <option value="GE +995">GE +995</option>
                                                         <option value="DE +49">DE +49</option>
                                                         <option value="GH +233">GH +233</option>
                                                         <option value="GI +350">GI +350</option>
                                                         <option value="GR +30">GR +30</option>
                                                         <option value="GL +299">GL +299</option>
                                                         <option value="GD +1-473">GD +1-473</option>
                                                         <option value="GU +1-671">GU +1-671</option>
                                                         <option value="GT +502">GT +502</option>
                                                         <option value="GG +44-1481">GG +44-1481</option>
                                                         <option value="GN +224">GN +224</option>
                                                         <option value="GW +245">GW +245</option>
                                                         <option value="GY +592">GY +592</option>
                                                         <option value="HT +509">HT +509</option>
                                                         <option value="HN +504">HN +504</option>
                                                         <option value="HK +852">HK +852</option>
                                                         <option value="HU +36">HU +36</option>
                                                         <option value="IS +354">IS +354</option>
                                                         <option value="ID +62">ID +62</option>
                                                         <option value="IR +98">IR +98</option>
                                                         <option value="IQ +964">IQ +964</option>
                                                         <option value="IE +353">IE +353</option>
                                                         <option value="IM +44-1624">IM +44-1624</option>
                                                         <option value="IL +972">IL +972</option>
                                                         <option value="IT +39">IT +39</option>
                                                         <option value="CI +225">CI +225</option>
                                                         <option value="JM +1-876">JM +1-876</option>
                                                         <option value="JP +81">JP +81</option>
                                                         <option value="JE +44-1534">JE +44-1534</option>
                                                         <option value="JO +962">JO +962</option>
                                                         <option value="KZ +7">KZ +7</option>
                                                         <option value="KE +254">KE +254</option>
                                                         <option value="KI +686">KI +686</option>
                                                         <option value="XK +383">XK +383</option>
                                                         <option value="KW +965">KW +965</option>
                                                         <option value="KG +996">KG +996</option>
                                                         <option value="LA +856">LA +856</option>
                                                         <option value="LV +371">LV +371</option>
                                                         <option value="LB +961">LB +961</option>
                                                         <option value="LS +266">LS +266</option>
                                                         <option value="LR +231">LR +231</option>
                                                         <option value="LY +218">LY +218</option>
                                                         <option value="LI +423">LI +423</option>
                                                         <option value="LT +370">LT +370</option>
                                                         <option value="LU +352">LU +352</option>
                                                         <option value="MO +853">MO +853</option>
                                                         <option value="MK +389">MK +389</option>
                                                         <option value="MG +261">MG +261</option>
                                                         <option value="MW +265">MW +265</option>
                                                         <option value="MY +60">MY +60</option>
                                                         <option value="MV +960">MV +960</option>
                                                         <option value="ML +223">ML +223</option>
                                                         <option value="MT +356">MT +356</option>
                                                         <option value="MH +692">MH +692</option>
                                                         <option value="MR +222">MR +222</option>
                                                         <option value="MU +230">MU +230</option>
                                                         <option value="YT +262">YT +262</option>
                                                         <option value="MX +52">MX +52</option>
                                                         <option value="FM +691">FM +691</option>
                                                         <option value="MD +373">MD +373</option>
                                                         <option value="MC +377">MC +377</option>
                                                         <option value="MN +976">MN +976</option>
                                                         <option value="ME +382">ME +382</option>
                                                         <option value="MS +1-664">MS +1-664</option>
                                                         <option value="MA +212">MA +212</option>
                                                         <option value="MZ +258">MZ +258</option>
                                                         <option value="MM +95">MM +95</option>
                                                         <option value="NA +264">NA +264</option>
                                                         <option value="NR +674">NR +674</option>
                                                         <option value="NP +977">NP +977</option>
                                                         <option value="NL +31">NL +31</option>
                                                         <option value="AN +599">AN +599</option>
                                                         <option value="NC +687">NC +687</option>
                                                         <option value="NZ +64">NZ +64</option>
                                                         <option value="NI +505">NI +505</option>
                                                         <option value="NE +227">NE +227</option>
                                                         <option value="NG +234">NG +234</option>
                                                         <option value="NU +683">NU +683</option>
                                                         <option value="KP +850">KP +850</option>
                                                         <option value="MP +1-670">MP +1-670</option>
                                                         <option value="NO +47">NO +47</option>
                                                         <option value="OM +968">OM +968</option>
                                                         <option value="PK +92">PK +92</option>
                                                         <option value="PW +680">PW +680</option>
                                                         <option value="PS +970">PS +970</option>
                                                         <option value="PA +507">PA +507</option>
                                                         <option value="PG +675">PG +675</option>
                                                         <option value="PY +595">PY +595</option>
                                                         <option value="PE +51">PE +51</option>
                                                         <option value="PH +63">PH +63</option>
                                                         <option value="PN +64">PN +64</option>
                                                         <option value="PL +48">PL +48</option>
                                                         <option value="PT +351">PT +351</option>
                                                         <option value="PR +1-787, 1-939">PR +1-787, 1-939</option>
                                                         <option value="QA +974">QA +974</option>
                                                         <option value="CG +242">CG +242</option>
                                                         <option value="RE +262">RE +262</option>
                                                         <option value="RO +40">RO +40</option>
                                                         <option value="RU +7">RU +7</option>
                                                         <option value="RW +250">RW +250</option>
                                                         <option value="BL +590">BL +590</option>
                                                         <option value="SH +290">SH +290</option>
                                                         <option value="KN +1-869">KN +1-869</option>
                                                         <option value="LC +1-758">LC +1-758</option>
                                                         <option value="MF +590">MF +590</option>
                                                         <option value="PM +508">PM +508</option>
                                                         <option value="VC +1-784">VC +1-784</option>
                                                         <option value="WS +685">WS +685</option>
                                                         <option value="SM +378">SM +378</option>
                                                         <option value="ST +239">ST +239</option>
                                                         <option value="SA +966">SA +966</option>
                                                         <option value="SN +221">SN +221</option>
                                                         <option value="RS +381">RS +381</option>
                                                         <option value="SC +248">SC +248</option>
                                                         <option value="SL +232">SL +232</option>
                                                         <option value="SG +65">SG +65</option>
                                                         <option value="SX +1-721">SX +1-721</option>
                                                         <option value="SK +421">SK +421</option>
                                                         <option value="SI +386">SI +386</option>
                                                         <option value="SB +677">SB +677</option>
                                                         <option value="SO +252">SO +252</option>
                                                         <option value="ZA +27">ZA +27</option>
                                                         <option value="KR +82">KR +82</option>
                                                         <option value="SS +211">SS +211</option>
                                                         <option value="ES +34">ES +34</option>
                                                         <option value="LK +94">LK +94</option>
                                                         <option value="SD +249">SD +249</option>
                                                         <option value="SR +597">SR +597</option>
                                                         <option value="SJ +47">SJ +47</option>
                                                         <option value="SZ +268">SZ +268</option>
                                                         <option value="SE +46">SE +46</option>
                                                         <option value="CH +41">CH +41</option>
                                                         <option value="SY +963">SY +963</option>
                                                         <option value="TW +886">TW +886</option>
                                                         <option value="TJ +992">TJ +992</option>
                                                         <option value="TZ +255">TZ +255</option>
                                                         <option value="TH +66">TH +66</option>
                                                         <option value="TG +228">TG +228</option>
                                                         <option value="TK +690">TK +690</option>
                                                         <option value="TO +676">TO +676</option>
                                                         <option value="TT +1-868">TT +1-868</option>
                                                         <option value="TN +216">TN +216</option>
                                                         <option value="TR +90">TR +90</option>
                                                         <option value="TM +993">TM +993</option>
                                                         <option value="TC +1-649">TC +1-649</option>
                                                         <option value="TV +688">TV +688</option>
                                                         <option value="VI +1-340">VI +1-340</option>
                                                         <option value="UG +256">UG +256</option>
                                                         <option value="UA +380">UA +380</option>
                                                         <option value="AE +971">AE +971</option>
                                                         <option value="GB +44">GB +44</option>
                                                         <option value="UY +598">UY +598</option>
                                                         <option value="UZ +998">UZ +998</option>
                                                         <option value="VU +678">VU +678</option>
                                                         <option value="VA +379">VA +379</option>
                                                         <option value="VE +58">VE +58</option>
                                                         <option value="VN +84">VN +84</option>
                                                         <option value="WF +681">WF +681</option>
                                                         <option value="EH +212">EH +212</option>
                                                         <option value="YE +967">YE +967</option>
                                                         <option value="ZM +260">ZM +260</option>
                                                         <option value="ZW +263">ZW +263</option>
                                                       

                                                    
                                                    </select>
                                                    </div>
                                                    <div class="col-7 ps-0">
                                                <div class="form-floating">
                                                 
                                                    <input type="tel" name="contactnumber" minlength="10" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control rounded-0 fs-md-16 fs-14 border border-left"id="phoneNumber" placeholder="Enter Phone Number" required>
                                                    <label class="fw-600 fs-md-16 fs-14" for="phoneNumber">Mobile Number <label class="text-danger">* </label></label>
                                                    <div class="invalid-feedback fs-12">Please Enter a Valid Phone Number.</div>
                                                </div>
                                            </div>
                                            </div>
                                            </div>
                                 <div class="col-md-6">
                                    <div class="form-floating">
                                       <input type="email" name="contactemail" class="form-control rounded-0" id="emailID" placeholder="Enter Email ID"  pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$">
                                       <label class="fw-600" for="emailID">Email ID (Optional)</label>
                                       <div class="invalid-feedback fs-12">Please Enter a Valid Email ID.</div>
                                    </div>
                                 </div>
                                 {{-- <div class="col-md-12">
                                    <div class="form-floating">
                                       <input type="text" name="organization" class="form-control rounded-0" id="organization" placeholder="Enter Organization Name" required>
                                       <label class="fw-600" for="organization">Organization <span class="text-danger">*</span></label>
                                       <div class="invalid-feedback fs-12">Please Enter Organization Name.</div>
                                    </div>
                                 </div> --}}
                                 <div class="col-md-6">
                                   <div class="col-md-12">
                                                <div class="form-floating">
                                                    <select name="requirement" required="" class="form-control rounded-0 pt-2 fw-400">
                                                        <option value="">Project Brief *</option>
                                                        <option value="Fantasy Cricket App Development">Fantasy Cricket App Development</option>
                                                            <option value="Fantasy Sports App Development">Fantasy Sports App Development</option>
                                                            <option value="Mobile App Development">Mobile App Development</option>
                                                            <option value="E-commerce Development">E-commerce Development</option>
                                                            <option value="MLM Software Development">MLM Software Development</option>
                                                            <option value="Website Design">Website Design</option>
                                                            <option value="Web Portal Development">Web Portal Development</option>
                                                            <option value="Custom ERP Development">Custom ERP Development</option>
                                                            <option value="Hire Dedicated Developer">Hire Dedicated Developer</option>
                                                            <option value="SEO/Social Media Marketing">SEO/Social Media Marketing</option>
                                                            <option value="Other Servicest">Other Services</option>
                                                       
                                                    </select>
                                                 <div class="invalid-feedback fs-12">Please Enter a Valid Requierment.</div>
                                                    <!-- <input type="text" name="requirement" class="form-control rounded-0 fs-md-16 fs-14" id="Requierment" placeholder="Enter Requierment Name" required> -->
                                                    <!-- <label class="fw-600 fs-md-16 fs-14" for="Requierment"></label> -->
                                                    <!-- <div class="invalid-feedback fs-12">Please Enter a Valid Requierment.</div> -->
                                                </div>
                                            </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-floating">
                                       <textarea name="mmessage" class="form-control rounded-0" placeholder="Leave a message here" id="message" style="height: 100px">@if(isset($_GET['url'])){{$_GET['url']}}@endif</textarea>
                                       <label for="message">Write a Message <span class="text-danger">*</span></label>
                                       <div class="invalid-feedback">Please Leave a message here.</div>
                                    </div>
                                 </div>
                                 
                                 <div class="col-auto align-self-center">
                                    <button type="submit" id="conBtn" class="btn btn-theme2 fs-md-14 fs-12 fw-bold hero_read_more_btn py-2 px-md-4 px-3" style="transform-style: preserve-3d;" data-tilt data-tilt-max="3" data-tilt-speed="400" data-tilt-perspective="2500">
                                       <span class="d-block"><span>Send Now</span> <i class="imgd img-long-arrow-right position-relative bottom-n2px ms-2"></i></span>
                                    </button>
                                 </div>

                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-5 position-relative ps-lg-5 pt-lg-0 pt-md-3 pt-3">
                     <div class="sparater-block">
                        <span class="fw-900">OR</span>
                     </div>
                     <div class="row mx-0 ms-lg-4">
                        <div class="col-12 heading fs-md-14 fs-12 left"><span class="fs-xl-26 fs-lg-26 fs-md-24 fs-20">Contact <b>IMG Global Infotech</b></span></div>
                        <div class="col-12 px-0 pt-4">
                           <div class="emailid-block rows">
                              <a href="mailto:info@imgglobalinfotech.com" class="transition text-decoration-none wave-1 my-3 w-100 rounded position-relative" tabindex="-1">
                                 <i class="imgl img-envelope position-absolute left-md-22px left-15px top-md-23px top-14px w-md-28px w-18px h-39px fs-md-32 fs-24 text-theme2 d-flex align-items-center"></i> <span class="small-text rows">mail to our sales department</span>
                                 <span class="large-text rows">info@imgglobalinfotech.com</span>
                              </a>
                           </div>
                        </div>
                        <div class="col-12 px-0">
                           <div class="emailid-block skype_block rows">
                              <a href="skype:kunwar.neeraj.rajput?call" class="transition text-decoration-none wave-1 mb-3 w-100 rounded position-relative" tabindex="-1">
                                 <i class="imgb img-skype position-absolute left-md-22px left-15px top-md-23px top-14px w-md-28px w-18px h-39px fs-md-32 fs-24 text-theme1 d-flex align-items-center"></i> <span class="small-text rows">Our Skype Id</span>
                                 <span class="large-text rows">live:kunwar.neeraj.rajput</span>
                              </a>
                           </div>
                        </div>
                        <!-- <div class="col-12 px-0">
                           <div class="emailid-block rows">
                              <a href="tel:919887034345" class="transition text-decoration-none wave-1 mb-3 w-100 rounded position-relative" tabindex="-1">
                                 <i class="imgb img-whatsapp position-absolute left-md-22px left-15px top-md-23px top-14px w-md-28px w-18px h-39px fs-md-32 fs-24 text-success d-flex align-items-center"></i> <span class="small-text rows">Call or Whatsapp</span>
                                 <span class="large-text rows">+91-9887034345</span>
                              </a>
                           </div>
                        </div> -->
                        <div class="col-12 px-0">
                           <div class="listing-block rows mt-2">
                              <div class="titlelings fw-bold">&amp; What you will get:</div>
                              <ul class="bluts ps-0 mb-0">
                                 <li>On-call inquiry assistance</li>
                                 <li>Project consulting by experts</li>
                                 <li class="mb-0">Detailed project estimation</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

@endsection
@push('scripts')
   <script src="{{asset('/public')}}/assets/js/contact-us.min.js"></script>
   <script>
      $( function() {  
         $( "#tags" ).autocomplete({
            source: availableTags
         });
      });
   </script>
@endpush
