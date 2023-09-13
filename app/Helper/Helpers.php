<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
// use Route;
// $db = new DB();
// get url of blogs images from live server
// if(!function_exists('BLOG_IMAGE_URL')){
//     function BLOG_IMAGE_URL(){
//         return 'https://www.imgglobalinfotech.com/admin/images/blog/';
//     }
// }

if(!function_exists('GLOABLIMAGEPATH')){
    function GLOBALIMAGEPATH($image){
        return asset('/public').'/assets/img/'.$image;
    }
}
if (!function_exists('LOG_INFO')) {
    function LOG_INFO($param)
    {
        LOG::info($param);
    }
}
if(!function_exists('GETFOLDERPATH')){
    function GETFOLDERPATH(){
        $r1 = Route::current()->uri;
        
        return asset('/public/assets/img/'.rtrim($r1,'.php'));
    }
}
//===============Blog Images urls=================================================
if (!function_exists('BLOG_IMAGE_URL')) {
    function BLOG_IMAGE_URL()
    {
        return asset('/imgadmin2/images/blog/') . '/';
    }
}
if (!function_exists('BLOG_IMAGE_URL_LAZY')) {
    function BLOG_IMAGE_URL_LAZY($imageName)
    {
        return asset('/imgadmin2/images/blog') . '/' . $imageName;
    }
}
if (!function_exists('BLOG_IMAGE_URL_THUMB')) {
    function BLOG_IMAGE_URL_THUMB($imageName)
    {
        return asset('/imgadmin2/images/blog/blog_thumb') . '/' . $imageName;
    }
}
if(!function_exists('GETBLOGSBYLIMIT')){
    function GETBLOGSBYLIMIT($limit, $category = ''){
        $blogs = DB::table('blogs')
                ->join('blog_category','blog_category.id','blogs.category')
                ->join('blog_author','blog_author.id','blogs.blog_author')
                ->select(
                    'blog_category.title as blogtitle','blog_category.slugcategory as slugcategory','blog_author.author_name as author_name','blogs.title','blogs.blog_date','blogs.description','blogs.urlBlog','blogs.blog_image','blogs.image_alttag','blogs.image_title','blogs.id','blogs.title as Blog_Title'
                )
                // ->orderByRaw("RAND()")
                ->orderBy("id","DESC")
                ->where('blogs.status',1)
                ->limit($limit);

        if( !empty($category) ) {
            $bgc = DB::table('blog_category')->where('slugcategory', $category)->first();
            if (!empty($bgc)) {
                
                $blogs = $blogs->where('blog_category.id', $bgc->id);
            }
        }

        $blogs = $blogs
                ->get();
        
        $blog_data = '';
        if($blogs->isNotEmpty()){
            foreach ($blogs as $key => $value) {
                    $blog_data.='<a href="'.asset('/').'blog/'.$value->urlBlog.'" class="col-12 text-dark text-decoration-none my-md-3 my-2 blog-items px-2 d-block">
                                    <div class="row mx-0 py-3 bg-white">
                                        <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                            <img src="'.BLOG_IMAGE_URL_THUMB($value->blog_image).'" class="w-100" alt="'.$value->image_alttag.'">
                                        </div>
                                        <div class="col-12 fs-14 text-muted fw-bold py-2">
                                            <span class="text-theme3 me-2">'.date('M d, Y',strtotime($value->blog_date)).'</span> 
                                            <span> By '.$value->author_name.'</span>
                                        </div>
                                        <div class="col-12 fs-14 fw-600">'.$value->Blog_Title.'
                                        </div>
                                    </div>
                                </a>';
            }
        }
        $content = '<div class="col-12 h-100 px-0 pt-2">
                        <div class="row align-items-start">
                            <div class="col-12">
                                <div class="row blog_slider owl-carousel">
                                    '.$blog_data.'
                                </div>
                            </div>
                        </div>
                    </div>';
        
        return $content;
    }
}

if(!function_exists('HASBLOG')){
    function HASBLOG($limit, $category = ''){
        $blogs = DB::table('blogs')
                ->join('blog_category','blog_category.id','blogs.category')
                ->join('blog_author','blog_author.id','blogs.blog_author')
                ->select(
                    'blog_category.title as blogtitle','blog_category.slugcategory as slugcategory','blog_author.author_name as author_name','blogs.title','blogs.blog_date','blogs.description','blogs.urlBlog','blogs.blog_image','blogs.image_alttag','blogs.image_title','blogs.id','blogs.title as Blog_Title'
                )
                // ->orderByRaw("RAND()")
                ->orderBy("id","DESC")
                ->where('blogs.status',1)
                ->limit($limit);

        if( !empty($category) ) {
            $bgc = DB::table('blog_category')->where('slugcategory', $category)->first();
            if (!empty($bgc)) {
                
                $blogs = $blogs->where('blog_category.id', $bgc->id);
            }
        }

        $blogs = $blogs
                ->get();

        return ($blogs->isNotEmpty());
    }
}

if(!function_exists('HASPORTFOLIO')){
    function HASPORTFOLIO($limit, $category = ''){
        $portfolios = DB::table('galleries')
                        ->where('tab_status',1)
                        ->where('section_image','!=',NULL)
                        ->where('image','!=',NULL)
                        ->where('single_image','!=',NULL)
                        // ->orderByRaw("RAND()")
                        ->orderBy("id","DESC")
                        ->limit($limit);
        // dd($portfolios);
        if( !empty($portfolios) ) {
            $bgc = DB::table('portfolio_category')->where('slugcategory', $category)->first();
            if (!empty($bgc)) {
                
                $portfolios = $portfolios->where('galleries.category', $bgc->id);
            }
        }

        $portfolios = $portfolios
                        ->get();
        // dd($portfolios);
        return ($portfolios->isNotEmpty());
    }
}
if(!function_exists('HASPORTFOLIOSECTION')){
    function HASPORTFOLIOSECTION($limit, $category = ''){
        $portfolios = DB::table('galleries')
                        ->where('tab_status',1)
                        // ->orderByRaw("RAND()")
                        ->where('section_image','!=',NULL)
                        ->where('image','!=',NULL)
                        ->where('single_image','!=',NULL)
                        ->orderBy("id","DESC")
                        ->limit($limit);

        if( !empty($portfolios) ) {
            $bgc = DB::table('portfolio_category')->where('slugcategory', $category)->first();
            if (!empty($bgc)) {
                
                $portfolios = $portfolios->where('galleries.category', $bgc->id);
            }
        }

        $portfolios = $portfolios
                        ->get();

        return ($portfolios->isNotEmpty());
    }
}



if(!function_exists('GETBLOGSBYLIMITFORHOME')){
    function GETBLOGSBYLIMITFORHOME($limit){
        $blogs = DB::table('blogs')
                ->join('blog_category','blog_category.id','blogs.category')
                ->join('blog_author','blog_author.id','blogs.blog_author')
                ->select(
                    'blog_category.title as blogtitle','blog_category.slugcategory as slugcategory','blog_author.author_name as author_name','blogs.title','blogs.blog_date','blogs.description','blogs.urlBlog','blogs.blog_image','blogs.image_alttag','blogs.image_title','blogs.id','blogs.title as Blog_Title'
                )
                ->orderBy("id","DESC")
                ->where('blogs.status',1)
                ->limit($limit)
                ->get();
        
        $blog_data = '';
        if($blogs->isNotEmpty()){
            foreach ($blogs as $key => $value) {
                    $blog_data.='<a href="'.asset('/').'blog/'.$value->urlBlog.'" class="col-lg-3 col-md-6 col-12 text-dark text-decoration-none my-md-3 my-2 blog-items">
                                    <div class="row mx-0 py-3 bg-white">
                                        <div class="col-12 position-relative overflow-hidden blog-img-hvr">
                                            <img src="'.BLOG_IMAGE_URL_THUMB($value->blog_image).'" class="w-100" alt="'.$value->image_alttag.'">
                                        </div>
                                        <div class="col-12 fs-14 text-muted fw-bold py-2">
                                            <span class="text-theme3 me-2">'.date('M d, Y',strtotime($value->blog_date)).'</span> 
                                            <span> By '.$value->author_name.'</span>
                                        </div>
                                        <div class="col-12 fs-14 fw-600">'.$value->Blog_Title.'
                                        </div>
                                    </div>
                                </a>';
            }
        }
        $content = '<div class="col-12 h-100 px-0 pt-2">
                        <div class="row align-items-start">
                            <div class="col-12">
                                <div class="row blog_slider owl-carousel">
                                    '.$blog_data.'
                                </div>
                            </div>
                        </div>
                    </div>';
        
        return $content;
    }
}
//===================================================================================
//=========================Portfolio functions ======================================
if (!function_exists('PORTFOLIO_IMAGE_URL')) {
    function PORTFOLIO_IMAGE_URL($image)
    {
        return asset('/imgadmin2/images/portfolio/') . '/'.$image;
    }
}
if (!function_exists('PORTFOLIO_THUMB_URL')) {
    function PORTFOLIO_THUMB_URL($imageName)
    {
        return asset('/imgadmin2/images/portfolio/portfolio_thumb') . '/' . $imageName;
    }
}
if (!function_exists('PORTFOLIO_THUMB2_URL')) {
    function PORTFOLIO_THUMB2_URL($imageName)
    {
        return asset('/imgadmin2/images/portfolio/portfolio_thumb2') . '/' . $imageName;
    }
}
if (!function_exists('PORTFOLIO_LAZY_URL')) {
    function PORTFOLIO_LAZY_URL($imageName)
    {
        return asset('/imgadmin2/images/portfolio/portfolio_lazy') . '/' . $imageName;
    }
}
if (!function_exists('PORTFOLIO_SECTIONIMAGE_URL')) {
    function PORTFOLIO_SECTIONIMAGE_URL($image)
    {
        return asset('/imgadmin2/images/portfolio/section') . '/'.$image;
    }
}

if (!function_exists('PORTFOLIO_LOGOIMAGE_URL')) {
    function PORTFOLIO_LOGOIMAGE_URL($image)
    {
        return asset('/imgadmin2/images/portfolio/logo') . '/'.$image;
    }
}
if (!function_exists('GET_TECHNOLOGY')) {
    function GET_TECHNOLOGY($techs)
    {
        $techno = explode(',', $techs);
        $tech_data = DB::table('technology')->whereIn('id', $techno)->where('status', 1)->get(['name']);
        return $tech_data;
    }
}
if (!function_exists('GET_CHUNK_WORD')) {
    function GET_CHUNK_WORD($word)
    {
        $techno = explode(' ', $word);
        $exceptFirstWord = Arr::except($techno, [0]);
        switch (Str::wordCount($word)) {
            case 1:
                return '<b>' . $word . '</b>';
                break;
            default:
                return $techno[0] . ' <b>' . implode(' ', $exceptFirstWord) . '</b>';
                break;
        }
    }
}
if(!function_exists('GETPORTFOLIOSBYLIMIT')){
    function GETPORTFOLIOSBYLIMIT($limit, $category = ''){
        $select = ['location','title','tagline','image','tech','slug','single_image'];

        $portfolios = DB::table('galleries')
                        ->where('tab_status',1)
                        // ->orderByRaw("RAND()")
                        ->orderBy("id","DESC")
                        ->limit($limit);
        
        if( !empty($portfolios) ) {
            $bgc = DB::table('portfolio_category')->where('slugcategory', $category)->first();
            if (!empty($bgc)) {
                
                $portfolios = $portfolios->where('galleries.category', $bgc->id);
            }
        }

        $portfolios = $portfolios
                    ->get($select);
                    
        $prtfolio_data = '';
        if($portfolios->isNotEmpty()){
            foreach ($portfolios as $key => $value) {
                
                if(!empty($value->image) && !empty($value->single_image)){
                        $prtfolio_data.='<div class="col-lg-12 col-md-12 col-12">
                                            <div class="mobile_app_portfolio_box">
                                                <a href="'.asset('/portfolio/'.$value->slug).'">
                                                    <figure class="position-relative overflow-hidden w-100 text-start bg-black shadow">
                                                        <img class="w-100" src="'.PORTFOLIO_IMAGE_URL($value->image).'" alt="'.Str::title($value->title).'">
                                                        <figcaption>
                                                            <h3 class="d-none invisible">Mr. and Mrs. Idly</h3>
                                                            <strong class="text-white fs-md-19 fs-sm-17 fs-16">'.Str::title($value->title).'</strong>
                                                            <span class="fs-md-16 fs-sm-15 fs-14">'.$value->tagline.'</span>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                                </div>
                                            </div>';
                }
            }
        }
        $content = $prtfolio_data;
        return $content;
    }
}
if(!function_exists('GETSECTIONPORTFOLIOSBYLIMIT')){
    function GETSECTIONPORTFOLIOSBYLIMIT($limit, $category = ''){
        $select = ['location','title','tagline','image','tech','slug','section_image','description','url','apkurl'];

        $portfolios = DB::table('galleries')
                        ->where('tab_status',1)
                        ->where('section_image','!=',NULL)
                        ->where('logo','!=',NULL)
                        ->where('image','!=',NULL)
                        ->where('single_image','!=',NULL)
                        // ->orderByRaw("RAND()")
                        ->orderBy("id","DESC")
                        ->limit($limit);

        if( !empty($portfolios) ) {
            $bgc = DB::table('portfolio_category')->where('slugcategory', $category)->first();
            if (!empty($bgc)) {
                
                $portfolios = $portfolios->where('galleries.category', $bgc->id);
            }
        }

        $portfolios = $portfolios
                    ->get($select);
        
        $portfolio_data = '';
        if($portfolios->isNotEmpty()){
            foreach ($portfolios as $key => $value) {
                if( !empty($value->section_image) ) {
                    $portfolio_data .='<div class="fantasy-cricket-sldier-box row align-items-start">
                                            <div class="col-lg-5 col-12 order-lg-0 order-md-1 order-1 mt-lg-0 mt-md-4 mt-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row mx-0 pb-4 d-lg-flex d-none">
                                                        <div class="col-12 heading fs-md-14 fs-12 left"> <span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20"> Our Latest <b> Portfolio </b></span></div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-12 fs-md-19 fs-18 fw-900 pb-3 text-theme3 text-lg-start text-center">'.Str::title($value->title).'</div>
                                                        <div class="col-12 fs-md-17 fs-16 fw-bold text-muted text-lg-start text-center">'.$value->tagline.'</div>
                                                    </div>
                                                </div>
                                                <div class="col-12 fw-600 fs-md-16 fs-sm-15 fs-14 text-muted mt-3 text-lg-start text-center">'.$value->description.'</div>
                                                <div class="col-12 mt-4 text-lg-start text-center pb-2">
                                                    <a href="'.$value->url.'" class="btn btn-theme3 fs-14 fw-bold py-2 px-4 me-2">
                                                        <span class="d-block"><span>View Live !</span> <i class="imgd img-laptop position-relative bottom-n2px ms-2"></i></span>
                                                    </a>';
                        if(!empty($value->apkurl)){

                        $portfolio_data .='         
                                                    <a href="'.$value->apkurl.'" download class="btn btn-theme2 fs-20 fw-bold py-2 text-white px-3 rounded-pill">
                                                        <span class="d-block"><i class="imgb img-android position-relative bottom-n2px"></i></span>
                                                    </a>';
                        }
                        $portfolio_data .=' 
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-lg-7 col-md-12">
                                            <div class="row fantasy-cricket-sldier-img text-center justify-content-center">
                                                <div class="col-12 text-center">
                                                    <img src="'.PORTFOLIO_SECTIONIMAGE_URL($value->section_image).'" alt="'.Str::title($value->title).'">
                                                </div>
                                            </div>
                                            </div>
                                        </div>';
                }
            }
        }
        $content = $portfolio_data;
        
        return $content;
    }
}


if(!function_exists('GETSECTIONPORTFOLIOSLOGOBYLIMIT')){
    function GETSECTIONPORTFOLIOSLOGOBYLIMIT($limit, $category = ''){
        $select = ['location','title','tagline','image','tech','slug','section_image','description','url','apkurl','logo'];

        $portfolios = DB::table('galleries')
                        ->where('tab_status',1)
                        ->where('section_image','!=',NULL)
                        ->where('logo','!=',NULL)
                        ->where('image','!=',NULL)
                        ->where('single_image','!=',NULL)
                        // ->orderByRaw("RAND()")
                        ->orderBy("id","DESC")
                        ->limit($limit);

        if( !empty($portfolios) ) {
            $bgc = DB::table('portfolio_category')->where('slugcategory', $category)->first();
            if (!empty($bgc)) {
                
                $portfolios = $portfolios->where('galleries.category', $bgc->id);
            }
        }

        $portfolios = $portfolios
                    ->get($select);
        
        $portfolio_data = '';
        if($portfolios->isNotEmpty()){
            foreach ($portfolios as $key => $value) {
                // dd($portfolios);
                if( !empty($value->logo) ) {
                    $portfolio_data .='<a target="_blank" href="'.$value->url.'" class="col-auto">
                    <img class="h-40px w-auto" src="'.PORTFOLIO_LOGOIMAGE_URL($value->logo).'" alt="'.$value->title.'" >
                 </a>';
                }
            }
        }
        $content = $portfolio_data;
        
        return $content;
    }
}

//=========================Portfolio functions =====================================================
if (!function_exists('TESTIMONIAL_IMAGE_URL')) {
    function TESTIMONIAL_IMAGE_URL($imageName)
    {
        return asset('/imgadmin2/images/testimonial') . '/' . $imageName;
    }
}
if(!function_exists('GETTESTIMONIALSBYLIMIT')){
    function GETTESTIMONIALSBYLIMIT($limit){
        $select = ['name','image','description','review_name','number_review'];
        $testimonials = DB::table('testimonials')
                        ->where('tab_status',1)
                        ->orderBy("sorting","ASC")
                        ->limit($limit)
                        ->get($select);
        
        $testimonials_data = '';
        if($testimonials->isNotEmpty()){
            foreach ($testimonials as $key => $value) {
                    $testimonials_data.='<div class="box">
                                            <div class="level-item">
                                                <div>
                                                    <div class="slider_icon">
                                                        <img class="avatar shadow" src="'.TESTIMONIAL_IMAGE_URL($value->image).'" alt="'.$value->name.'">
                                                    </div>
                                                    <div class="content">
                                                        <div class="fw-600 fs-md-16 fs-14 ellipsis-5 text-white my-3 text-center">
                                                            '.$value->description.'
                                                        </div>
                                                        <strong class="fw-bold fs-md-20 fs-16 text-theme1 text-center d-block">- '.$value->name.' -</strong>
                                                        <span class="fw-600 fs-md-14 fs-12 text-theme3 text-center d-block">Niro India</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
            }
        }
        $content = $testimonials_data;
        
        return $content;
    }
}

if(!function_exists('GETRECAPTCHADATA')){
    function GETRECAPTCHADATA($whichkey=''){
        switch ($whichkey) {
            case 'secret':
                return "6Ld_Yt0UAAAAAAYi1U7aqGOjcm6Zq7AS97qkn-Iy";
                break;
            case 'site':
                return "6Ld_Yt0UAAAAABeskcohdFzQdrWZqrYPq7EXSTUt";
                break;
                
            default:
                $captcha['secretKey']="6Ld_Yt0UAAAAAAYi1U7aqGOjcm6Zq7AS97qkn-Iy";
                $captcha['siteKey']="6Ld_Yt0UAAAAABeskcohdFzQdrWZqrYPq7EXSTUt";
                return $captcha;
                break;
        }
    }
}

if(!function_exists('VALIDATERECAPTCHA')){
    function VALIDATERECAPTCHA($g_recaptcha_response){
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.GETRECAPTCHADATA('secret').'&response='.$g_recaptcha_response);
            // Decode json data 
            return json_decode($verifyResponse);
    }
}
if(!function_exists('SMSCURL')){
    function SMSCURL($type,$for){
        switch ($for) {
            case 'quote':
                switch ($type) {
                    case 'prod':
                        $url="http://sms.bulksmsserviceproviders.com/api/send_http.php?authkey=7e3fbdd5ae383b753958f3453cc3e0b7&mobiles=9887034345&message=You+have+received+a+Quote+Message%0D%0A-+IMGERP&sender=IMGERP&route=B&Template_ID=1207162409363136054";
                    
                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, $url);
                        curl_setopt($ch, CURLOPT_HEADER, 0);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                        curl_exec($ch);
                        curl_close($ch);
                        break;
                    
                    default:
                        break;
                }
                break;
            
            case 'career':
                switch ($type) {
                    case 'prod':
                        $url="http://sms.bulksmsserviceproviders.com/api/send_http.php?authkey=7e3fbdd5ae383b753958f3453cc3e0b7&mobiles=9887034345&message=You+have+received+a+Career+Message%0D%0A-+IMGERP&sender=IMGERP&route=B&Template_ID=1207162409363136054";
                    
                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, $url);
                        curl_setopt($ch, CURLOPT_HEADER, 0);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                        curl_exec($ch);
                        curl_close($ch);
                        break;
                    
                    default:
                        break;
                }
                break;
            case 'contact':
                switch ($type) {
                    case 'prod':
                        $url="http://sms.bulksmsserviceproviders.com/api/send_http.php?authkey=7e3fbdd5ae383b753958f3453cc3e0b7&mobiles=9887034345&message=You+have+received+a+Contact+Message%0D%0A-+IMGERP&sender=IMGERP&route=B&Template_ID=1207162409363136054";
			
                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, $url);
                        curl_setopt($ch, CURLOPT_HEADER, 0);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                        curl_exec($ch);
                        curl_close($ch);
                        break;
                    
                    default:
                        break;
                }
                break;
            default:
                # code...
                break;
        }
        
        
    }
}

if(!function_exists('SENDQUOTEMAIL')){
    function SENDQUOTEMAIL($insertData,$type){
        switch ($type) {
            case 'prod':
                # code...
                break;
                $subject = "Request a Quote";
                    $message = "
                    <html>
                    <body>
                    <table>
                    <tr>
                    <td style='color:#E19D13;font-size:13px;font-weight: bold;'>Name :</td>
                    <td color:#333333;font-size:13px;>".$insertData['name']."</td>
                    </tr>
                    <tr>
                    <td style='color:#E19D13;font-size:13px;font-weight: bold;'>Email : </td>
                    <td color:#333333;font-size:13px;>".$insertData['email']."</td>
                    </tr>
                    <tr>
                    <td style='color:#E19D13;font-size:13px;font-weight: bold;'> Phone No. : </td>
                    <td color:#333333;font-size:13px;>".$insertData['number']."</td>
                    </tr>
                    <tr>
                    <td style='color:#E19D13;font-size:13px;font-weight: bold;'> Skype User-Id/Number : </td>
                    <td color:#333333;font-size:13px;>".$insertData['skype']."</td>
                    </tr>
                    <tr>
                    <td style='color:#E19D13;font-size:13px;font-weight: bold;'> Company Name : </td>
                    <td color:#333333;font-size:13px;>".$insertData['companyname']."</td>
                    </tr>
                    <tr>
                    <td style='color:#E19D13;font-size:13px;font-weight: bold;'> Website : </td>
                    <td color:#333333;font-size:13px;>".$insertData['website']."</td>
                    </tr>
                    <tr>
                    <td style='color:#E19D13;font-size:13px;font-weight: bold;'> Looking For : </td>
                    <td color:#333333;font-size:13px;>".$insertData['looking']."</td>
                    </tr>
                    <tr>
                    <td style='color:#E19D13;font-size:13px;font-weight: bold;'> Budget : </td>
                    <td color:#333333;font-size:13px;>".$insertData['budget']."</td>
                    </tr>
                    <tr>
                    <td style='color:#E19D13;font-size:13px;font-weight: bold;'> Project Details : </td>
                    <td color:#333333;font-size:13px;>".$insertData['description']."</td>
                    </tr>";
                    
                $file = file_get_contents(asset('/public')."/quote/".$insertData['image']);
                    
                if($file_name){
                    $message.="<tr>
                    <td style='color:#E19D13;font-size:13px;font-weight: bold;'> Uploaded File link : </td>
                    <td color:#333333;font-size:13px;><a href='".asset('/public')."/quote/".$insertData['image']."'> Click Here</a></td>
                    </tr>";
                } 
                    
                $message.="
                    <tr>
                    <td> <br/><br/><br/>Thank you,<br/><br/> IMG Global Infotech </td>
                    <td></td>
                    </tr>
                    </table>
                    </body>
                    </html>
                    ";
                    // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                // More headers
                $headers .= "From: imgglobalinfotech\r\n";
                    
                    // if($result->num_rows>0){
                        // while ($rowq = $result->fetch_assoc()){
                            // mail($rowq['email'],$subject,$message,$headers);
                        // }
                    // } 
                    
                $json['error']='0';
                $json['msg']='Quote Request Form Submitted Successfully';
                return $json;
            default:
                $json['error']='0';
                $json['msg']='Quote Request Form Submitted Successfully';
                return $json;
                break;
        }
        
    }
}
if(!function_exists('SENDCONTACTUSMAIL')){
    function SENDCONTACTUSMAIL($insertData,$type){
        $adminResult = "SELECT * FROM admin_email Where status = '1'";
        $adminResult = DB::table('admin_email')->where('status','1')->first();
        switch ($type) {
            case 'prod':
                # code...
                break;
                $subject = "Contact Mail";
                    $message = "
                    <html>
                        <body>
                        <p style='color:#E19D13;font-size:14px;font-weight: bold;'>From IMG Global Infotech ".$insertData['name']." wants to contact you</p>
                        <table>
                        <tr>
                        <td style='color:#E19D13;font-size:13px;font-weight: bold;'>Name :</td>
                        <td color:#333333;font-size:13px;> ".$insertData['name']."</td>
                        </tr>
                        <tr>
                        <td style='color:#E19D13;font-size:13px;font-weight: bold;'>Email : </td>
                        <td color:#333333;font-size:13px;>".$insertData['email']."</td>
                        </tr>
                        <tr>
                        <td style='color:#E19D13;font-size:13px;font-weight: bold;'>Phone No. : </td>
                        <td color:#333333;font-size:13px;>".$insertData['mobile']."</td>
                        </tr>
                        <tr>
                        <td style='color:#E19D13;font-size:13px;font-weight: bold;'>Requirement : </td>
                        <td color:#333333;font-size:13px;>".$insertData['requirement']."</td>
                        </tr>
                        <tr>
                        <td style='color:#E19D13;font-size:13px;font-weight: bold;'>Message : </td>
                        <td color:#333333;font-size:13px;>".$insertData['message']."</td>
                        </tr>
                        <tr>
                        <td> <br/><br/><br/>Thank you,<br/><br/> IMG Global Infotech </td>
                        <td></td>
                        </tr>
                        </table>
                        </body>
                    </html>
                        ";

                        // Always set content-type when sending HTML email
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                        // More headers 
                        $headers .= "From: imgglobalinfotech\r\n";
                    
                    // if($result->num_rows>0){
                        // while ($rowq = $result->fetch_assoc()){
                            // mail($rowq['email'],$subject,$message,$headers);
                        // }
                    // } 
                    
                return 1;
            default:
                return 1;
                break;
        }
        
    }
}
if(!function_exists('CHECKPUBLICURL')){
    function CHECKPUBLICURL(){
        $arry = explode('/', $_SERVER['REQUEST_URI']);
        if(in_array('public',$arry)){
            return true;
        }
    }
}

if(!function_exists('GETQUICKLINKS')){
    function GETQUICKLINKS($limit){
        $select = ['name','url'];

        $footer = DB::table('footer')
                        ->orderBy("id","DESC")
                        ->first();
        $quicklinks=explode(',',$footer->quicklinks);
        $bgc = DB::table('pageurl')->where('status',1)->WhereIn('id', $quicklinks);
        $pageurl = $bgc->get($select);
                    
        $quicklink_data = '';
        if(!empty($pageurl->toArray())){
            foreach ($pageurl as $value) {
                $quicklink_data.='<li><a class="text-decoration-none ps-0" href="'.asset($value->url).'" ><i class="imgd img-circle-notch me-2 ps-0 fs-13"></i>'.$value->name.'</a></li>';
            }
        }
        $content = $quicklink_data;
        return $content;
    }
}

if(!function_exists('EXCLUSIVESERVICES')){
    function EXCLUSIVESERVICES($limit){
        $select = ['name','url'];

        $footer = DB::table('footer')
                        ->orderBy("id","DESC")
                        ->first();
        $exclusiveservice=explode(',',$footer->exclusiveservice);
        $bgc = DB::table('pageurl')->where('status',1)->WhereIn('id', $exclusiveservice);
        $pageurl = $bgc
                    ->get($select);
                    
        $quicklink_data = '';
        if(!empty($pageurl->toArray())){
            foreach ($pageurl as $value) {
                $quicklink_data.='<li><a class="text-decoration-none ps-0" href="'.asset($value->url).'"><i class="imgd img-circle-notch me-2 ps-0 fs-13"></i>'.$value->name.'</a></li>';
            }
        }
        $content = $quicklink_data;
        return $content;
    }
}

if(!function_exists('ONTRENDING')){
    function ONTRENDING($limit){
        $select = ['name','url'];

        $footer = DB::table('footer')
                        ->orderBy("id","DESC")
                        ->first();
        $ontrending=explode(',',$footer->ontrending);
        $bgc = DB::table('pageurl')->where('status',1)->WhereIn('id', $ontrending);
        $pageurl = $bgc
                    ->get($select);
                    
        $quicklink_data = '';
        if(!empty($pageurl->toArray())){
            foreach ($pageurl as $value) {
                $quicklink_data.='<li><a class="text-decoration-none ps-0" href="'.asset($value->url).'"><i class="imgd img-circle-notch me-2 ps-0 fs-13"></i>'.$value->name.'</a></li>';
            }
        }
        $content = $quicklink_data;
        return $content;
    }
}

if(!function_exists('OTHERUNITS')){
    function OTHERUNITS($limit){
        $select = ['name','url'];

        $footer = DB::table('footer')
                        ->orderBy("id","DESC")
                        ->first();
        $otherunits=explode(',',$footer->otherunits);
        $bgc = DB::table('pageurl')->where('status',1)->WhereIn('id', $otherunits);
        $pageurl = $bgc
                    ->get($select);
                    
        $quicklink_data = '';
        if(!empty($pageurl->toArray())){
            foreach ($pageurl as $value) {
                $quicklink_data.='<a class="text-decoration-none col-auto mx-1" href="'.asset($value->url).'" target="_blank">'.$value->name.'</a>';
            }
        }
        $content = $quicklink_data;
        return $content;
    }
}

if(!function_exists('TAGCATEGORIES')){
    function TAGCATEGORIES($limit){
        $select = ['name','url'];

        $footer = DB::table('footer')
                        ->orderBy("id","DESC")
                        ->first();
        $categories=explode(',',$footer->categories);
        $bgc = DB::table('pageurl')->where('status',1)->WhereIn('id', $categories);
        $pageurl = $bgc
                    ->get($select);
                    
        $quicklink_data = '';
        if(!empty($pageurl->toArray())){
            foreach ($pageurl as $value) {
                $quicklink_data.='<a class="text-decoration-none" href="'.asset($value->url).'" target="_blank"> &nbsp'.$value->name.'</a>';
            }
        }
        $content = $quicklink_data;
        return $content;
    }
}

if(!function_exists('GETADDRESS')){
    function GETADDRESS($limit){
        $select = ['name','url'];

        $footer = DB::table('footer')
                        ->orderBy("id","DESC")
                        ->first();
        $address=explode('$#',$footer->address);
                    
        $quicklink_data = '';
        if(!empty($footer)){
            foreach ($address as $value) {
                $quicklink_data.='<div class="col-md-12 col-sm-12 pb-3 ps-0">
                <div class="row fs-14">
                    <div class="col-auto"><i class="imgl img-map-marker"></i></div>
                    <div class="col">'.$value.'</div>
                </div>
            </div>';
            }
        }
        $content = $quicklink_data;
        return $content;
    }
}

if(!function_exists('SOCIALMEDIAGET')){
    function SOCIALMEDIAGET($limit){
        $select = ['name','url'];

        $socialmedia = DB::table('socialmedia')
                        ->orderBy("id","DESC")
                        ->first();
                    
        $quicklink_data = '';
        if(!empty($socialmedia)){
                $quicklink_data.='<ul class="social-media-part nav-justified row mx-0">
                <li class="col-sm col-12 px-0">
                    <a class="text-decoration-none" href="'.$socialmedia->facebookurl.'" target="_blank">
                        <i class="imgb position-relative bottom-n2px img-facebook" aria-hidden="true"></i>
                        <div class="d-lg-inline-block d-sm-none">Facebook</div><span class="like-t">'.$socialmedia->facebookfollower.'</span>
                    </a>
                </li>
                <li class="col-sm col-12 px-0">
                    <a class="text-decoration-none" href="'.$socialmedia->twitterurl.'" target="_blank">
                        <i class="imgb position-relative bottom-n2px img-twitter" aria-hidden="true"></i>
                        <div class="d-lg-inline-block d-sm-none">Twitter</div><span class="like-t">'.$socialmedia->twitterfollower.'</span>
                    </a>
                </li>
                <li class="col-sm col-12 px-0">
                    <a class="text-decoration-none" href="'.$socialmedia->instagramurl.'" target="_blank">
                        <i class="imgb position-relative bottom-n2px img-instagram" aria-hidden="true"></i>
                        <div class="d-lg-inline-block d-sm-none">Instagram</div><span class="like-t">'.$socialmedia->instagramfollower.'</span>
                    </a>
                </li>
                <li class="col-sm col-12 px-0">
                    <a class="text-decoration-none" href="'.$socialmedia->youtuberurl.'" target="_blank">
                        <i class="imgb position-relative bottom-n2px img-youtube" aria-hidden="true"></i>
                        <div class="d-lg-inline-block d-sm-none">Youtube</div><span class="like-t">'.$socialmedia->youtubesubscriber.'</span>
                    </a>
                </li>
                <li class="col-sm col-12 px-0">
                    <a class="text-decoration-none" href="'.$socialmedia->linkedinurl.'" target="_blank">
                        <i class="imgb position-relative bottom-n2px img-linkedin" aria-hidden="true"></i>
                        <div class="d-lg-inline-block d-sm-none">LinkedIn</div><span class="like-t">'.$socialmedia->linkedinfollower.'</span>
                    </a>
                </li>
            </ul>';
        }
        $content = $quicklink_data;
        return $content;
    }
}
