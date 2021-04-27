# Laravel-Short-Code




## How to show dynamic date and time in value feilds?
Ans:
<input required type="datetime-local" value="{{date('Y-m-d\TH:i', strtotime($notification->date))}}">


## How to show dynamic date in value feilds?
Ans:
<input required type="data" value="{{date('Y-m-d', strtotime($notification->date))}}">


## How to show selected data in dropdown when edit ?
Ans:
<select>
<option  value="">Select User</option>
@foreach($users as $user)
<option value="{{$user->id}}" {{$notification->user_id == $user->id  ? 'selected' : ''}}>{{$user->f_name}} {{$user->company}}</option>
@endforeach
</select>


## How to Create post method in form ?
Ans:
<form class="" action="{{route('notifications.update',$notification->id)}}" method="post">
</form>


## How to Show message from Controller in Frontend ?
Ans:
{{Session::get('message')}}


## How to find maximam price in table ?
Ans:
$price = DB::table('orders')->max('price');


## How to Orderby in table ?
Ans:
For First data from table show in fisrt columns
->orderBy('id', 'ASC')

For Letest data from table show in fisrt columns
->orderBy('id', 'desc')


## How to upload image in laravel ?
Ans:

1st method:

          //get file
           $file = $request->file('video_0');
            //get file name
            $filename = $file->getClientOriginalName();
            //create path for file move to folder
            $path = 'public/uploads/';
            //move file to folder
            $p =  $file->move($path, $filename);


2nd method:
 
 // get file name
 $name = $request->file('img')->getClientOriginalName();
 
 //create path and move to folder
 $path = $request->file('img')->move('public/files');


3rd method:

 if($request->has('img')){

        //get file extension
        $extension = ".".$request->img->getClientOriginalExtension();
        //get file name
        $name = basename($request->img->getClientOriginalName(), $extension).time();
        //concatinate file and extention
        $name = $name.$extension;
        //move file to folder
        $path = $request->thumbnail->storeAs('images', $name, 'public');
        }




## How to delete in laravel with query builder?
Ans:

 public function destroy($id)
    {
          $detete =  DB::table('users')->where('id',$id)->delete();
          if($detete){
            return back()->with('flash_success','User has been deleted!');
        } else {
             //return response()->json('User has Not deleted!');
            return back()->with('flash_error', 'Whoops! something went wrong.');
        }
    }

