<?php 
namespace App\Http\Controllers;


use Page;
use Sitemap;
use DB;

class SitemapsController extends Controller
{
    public function sitemap()
    {
        
        Sitemap::addTag(asset('/'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/about-us.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/contact-us.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/career.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/privacy-policy.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/terms-and-conditions.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/disclaimer.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/blog'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/blog/search'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/portfolio.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/mission-and-vision.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/mobile-app-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/mobile-app-development-in-jaipur.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/web-app-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/web-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/software-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/website-design.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/services.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/seo-services.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/social-media-marketing-services.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/pay-per-click-services.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/app-store-optimization-services.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/long-tail-seo-keyword.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/long-tail-seo-keyword-research.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/regular-blog-posts.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/competitor-analysis.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/link-building-services.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/digital-marketing-services.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/on-page-optimization.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/brand-awareness.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/biometric-attendance-software.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/digital-marketing-agency-in-jaipur.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/customer-relationship-management-software.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/corporate-website-design.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/api-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/gps-tracking-software.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/third-party-integration.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/product-reviews.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/lead-generation.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/matrimonial-portal-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/news-portal-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/property-portal-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/financial-portal-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/education-portal-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/opencart-website-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/wordpress-website-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/static-website-designing.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/dynamic-website-designing.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/parallax-web-designing.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/website-redesigning.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/responsive-web-designing.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/ecommerce-website-design-services.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/local-business-listing-services.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/online-reputation-management.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/paid-advertising.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/user-engagement.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/custom-software-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/custom-erp-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/woocommerce-website-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/industrial-erp-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/mlm-software-development-company.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/material-management.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/financial-management.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/college-management-software.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/institute-management-software.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/credit-cooperative-society-software.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/nidhi-company-software.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/nbfc-software.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/online-exam-management-software.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/real-estate-management-software.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/hospital-management-software.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/hotel-management-software.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/vehicle-rental-software.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/gym-management-software.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/web-development-in-jaipur.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/ecommerce-website-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/ecommerce-website-development-in-jaipur.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/healthcare-app-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/grocery-app-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/taxi-app-development-company.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/web-portal-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/cms-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/php-web-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/payment-gateway-integration.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/ecommerce-solutions.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/android-application-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/flutter-app-development-company.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/ios-app-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/ionic-app-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/payroll-management-software.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/inventory-management-software.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/institute-website-design.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/elearning-app-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/fantasy-stock-market-app-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/fantasy-sports-app-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/fantasy-cricket-app-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/fantasy-football-app-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/fantasy-movie-app-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/testimonials.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/online-exam-app-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/website-development-company-alwar.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/school-website-design.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/school-management-software.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/college-website-design.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/rfid-attendance-system-india.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/offshore-web-development-india.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/nidhi-company-software-kerala.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/food-delivery-app-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/ui-ux-design-services.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/psd-to-html-conversion.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/psd-to-wordpress-conversion.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/mobile-app-marketing-services.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/thankyou.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/request-a-quote.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/quote_action'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/career_action'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/contact_action'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/digitalform_action'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/sitemap.html'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/hotel-management-software.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/hire-android-app-developers.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/hire-ios-app-developers.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/hire-react-native-app-developers.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/hire-flutter-app-developers.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/hire-reactjs-developers.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/hire-nodejs-developers.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/hire-java-developers.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/hire-php-developers.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/hire-web-desginers.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/hire-angular-developers.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/hire-python-developers.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/hire-full-stack-developers.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/hire-web-developers.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/hire-mean-stack-developers.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/hire-mern-stack-developers.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/hire-mobile-app-developers.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/hire-ui-ux-developers.php'), date('Y-m-d h:i:s'), 'daily', '0.6');

        Sitemap::addTag(asset('/jewellery-app-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/doctor-on-demand-app-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/diet-and-nutrition-app-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/fitness-app-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/react-native-app-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/flutter-app-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/pharmacy-app-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        Sitemap::addTag(asset('/fashion-app-development.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        
        // blogs

        $posts = DB::table('blogs')
        ->join('blog_category', 'blog_category.id', 'blogs.category')
        ->join('blog_author', 'blog_author.id', 'blogs.blog_author')
        ->select('blog_category.title as category_title', 'blog_category.slugcategory as slugcategory', 'blog_author.author_name as author_name', 'blogs.*')
        ->where('blogs.status', 1)
        ->get();

        foreach ($posts as $post) {
            Sitemap::addTag(asset('blog/'.$post->urlBlog), $post->modified_date, 'daily', '0.6');
        }

        // blogs cat

        $posts = DB::table('blog_category')->get();

        foreach ($posts as $post) {
            Sitemap::addTag(asset('blog/category/'.$post->slugcategory), $post->modified_date, 'daily', '0.6');
        }
        
        // portfolio

        $posts = DB::table('galleries')
                    ->get();

        foreach ($posts as $post) {
            Sitemap::addTag(asset('portfolio/'.$post->slug), $post->modified, 'daily', '0.6');
        }

        Sitemap::addTag(asset('/404.php'), date('Y-m-d h:i:s'), 'daily', '0.6');
        return Sitemap::render();
    }
}

