<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\About;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class adminController extends Controller
{
    //

            public function index(){
                return view('admin.index'); 
            }

            public function loginIndex(){
                return view('login'); 
            }

            public  function editHero(Hero $hero){
// the hero is only one , only upddating
            return view('admin.edit-hero',['hero'=>$hero->find(1)]);
                
            }
            
           public  function editAbout(About $about){
             return view('admin.edit-about-us',['about' => $about->find(5)]);
            }

           public  function editCompany(GeneralSetting $generalSetting){
           return view('admin.edit-trust-company');
            
            }
           public  function editAction(){
            return view('admin.edit-action'); 
            }
           public  function addService(){
             return view('admin.add-service');  
            
            }
           public  function editService(){
            return view('admin.manage-service');
            
            }



// authorization of admin 
      public function login(Request $request){
        $validateInputCredentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required'
        ]);
        if(Auth::attempt($validateInputCredentials)){
            $request->session()->regenerate();
            return redirect(route('admin.index'));
        }
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->onlyInput('username');

        }
        /*  TODO 

        
        WORKING ON THE HERO CARD SECTION 
        
        
        */
        // updating the hero section 
     public function updateHero(Request $request, Hero $hero){
      
         $validateHeroUpdate = $request->validate([
            'hero_title' => 'required|string',
            'hero_desc' => 'required|string',
            'hero_img' => 'nullable|mimes:jpg,png',
            'hero_link' => 'required|string',
            'hero_tagline' => 'required|string',
            'hero_card_tagline1' => 'required|string',
            'hero_icon1' => 'nullable|mimes:jpg,png',
            'hero_icon2' => 'nullable|mimes:jpg,png',
            'hero_icon3' => 'nullable|mimes:jpg,png',
            'hero_icon4' => 'nullable|mimes:jpg,png'

        
        ]);
        
        if($request->hasfile('hero_img')){
            if(Storage::disk('public')->exists($hero->hero_img_url)){
                Storage::disk('public')->delete($hero->hero_img_url);
            }
            $heroImage = $request->file('hero_img');
            $heroImageDir = Storage::disk('public')->put('image_assets/hero',$heroImage);
            $hero->hero_img_url = $heroImageDir;


            
        }   
        // icon 1
           if($request->hasfile('hero_icon1')){
            if(Storage::disk('public')->exists($hero->hero_card_url_icon_1)){
                Storage::disk('public')->delete($hero->hero_card_url_icon_1);
            }
            $heroImageicon1 = $request->file('hero_icon1');
            $heroImageDiricon1 = Storage::disk('public')->put('image_assets/hero',$heroImageicon1);
            $hero->hero_card_url_icon_1 = $heroImageDiricon1;

            
            
        }   
        // icon 2

           if($request->hasfile('hero_icon2')){
            if(Storage::disk('public')->exists($hero->hero_card_url_icon_2)){
                Storage::disk('public')->delete($hero->hero_card_url_icon_2);
            }
            $heroImageicon2 = $request->file('hero_icon2');
            $heroImageDiricon2 = Storage::disk('public')->put('image_assets/hero',$heroImageicon2);
            $hero->hero_card_url_icon_2 = $heroImageDiricon2;

            
            
        }   

        // icon 3

           if($request->hasfile('hero_icon3')){
            if(Storage::disk('public')->exists($hero->hero_card_url_icon_3)){
                Storage::disk('public')->delete($hero->hero_card_url_icon_3);
            }
            $heroImageicon3 = $request->file('hero_icon3');
            $heroImageDiricon3 = Storage::disk('public')->put('image_assets/hero',$heroImageicon3);
            $hero->hero_card_url_icon_3 = $heroImageDiricon3;

            
            
        }   
        // icon 4

           if($request->hasfile('hero_icon4')){
            if(Storage::disk('public')->exists($hero->hero_card_url_icon_4)){
                Storage::disk('public')->delete($hero->hero_card_url_icon_4);
            }
            $heroImageicon4 = $request->file('hero_img');
            $heroImageDiricon4 = Storage::disk('public')->put('image_assets/hero',$heroImageicon4);
            $hero->hero_card_url_icon_4 = $heroImageDiricon4;

            
            
        }   



            $hero_card_data = $validateHeroUpdate['hero_card_tagline1'];
            $hero_card_data_arr = explode(",", $hero_card_data);
           
            $hero->hero_title = $validateHeroUpdate['hero_title'];
            $hero->hero_desc = $validateHeroUpdate['hero_desc'];
            $hero->hero_link = $validateHeroUpdate['hero_link'];
            $hero->hero_tagline = $validateHeroUpdate['hero_tagline'];

             $hero->hero_card_data = $hero_card_data_arr;


            $hero->save();
              
            return redirect(route('admin.edit-hero'))->with('msg','Hero updated successfully'); 

     }

     
     // updating about us section

        public function updateAbout(Request $request, About $about){
         $validateAboutUpdate = $request->validate([
            'about_tagline' => 'required|string',
            'about_desc' => 'required|string',
            'about_image' => 'nullable|mimes:jpg,png',
            'about_yt_banner_image' => 'nullable|mimes:jpg,png',
            'about_img_tagline' => 'required|string',
            'about_yt_link' => 'required|string'
        
        ]);
        if($request->hasfile('about_image')){
            //  check if the youtube video banner exists delete about  image file
            if(Storage::disk('public')->exists($about->about_image_url)){
                Storage::disk('public')->delete($about->about_image_url);
            }
                 $aboutImage = $request->file('about_image');
                 $aboutImageDir = Storage::disk('public')->put('image_assets/about',$aboutImage);
                 $about->about_image_url = $aboutImageDir;
            
            
        }
              if($request->hasfile('about_yt_banner_image')){
                // check if the youtube video banner exists and delete it
                if(Storage::disk('public')->exists($about->about_yt_banner_image)){
                    Storage::disk('public')->delete($about->about_yt_banner_image);
                }
                    $aboutYTImage = $request->file('about_yt_banner_image');
                    $aboutYTImageDir = Storage::disk('public')->put('image_assets/about',$aboutYTImage);
                    $about->about_yt_banner_image = $aboutYTImageDir;
                


              }
        
                    $about->about_tagline = $validateAboutUpdate['about_tagline'];
                    $about->about_desc = $validateAboutUpdate['about_desc'];
                    $about->about_img_tagline = $validateAboutUpdate['about_img_tagline'];
                    $about->about_yt_link = $validateAboutUpdate['about_yt_link'];
                    $about->save();
                   
              
            return redirect(route('admin.edit-about-us'))->with('msg','About section updated successfully'); 



        
        
        
     }
        
        
    }