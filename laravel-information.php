1.How to Create Route in Laravel?
Ans:

First Method:
Route::get('About-us',function() { // About-us is link you put this link on your browser so you see the about page 
 return view('about') // page name you create in view folder
});


2nd Method:
Route::view("About-us",'about');  // Fisrt is link and 2nd is page name 



2.How to pas a data from route in page?
Ans:

Route::('About-us/{name}' , function($name){
   return view('about',['name'=>$name]);
});

And go to the about.blade,php page and put this anywere you want {{$name}}
And Your Url is like this http://127.0.0.1:8000/About-us/Ameer You writte anything in url after Your page


3.How to redirect another page when we put another link?
Ans:

Route::('Contact-us', function() {
    return reditrect('about');
})

when we put Contact-us link so its show me the about page



4.what is component?
Ans:


php artisan make:component Your-component-name








