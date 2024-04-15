<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainGameController extends Controller
{
    // index page
    public function index()
    {
        return view('admin.gameDetails.addGame');
        // $user_table = User::all();
        // return view ('usermanagement.usertable',compact('user_table'));
    }

    public function addGame1()
    {
        return view('admin.rescue_champs.addgame1');
        // $user_table = User::all();
        // return view ('usermanagement.usertable',compact('user_table'));
    }

    public function addSlots()
    {
        return view('admin.gameDetails.addSlots');
        // $user_table = User::all();
        // return view ('usermanagement.usertable',compact('user_table'));
    }

    public function addRescueHindi()
    {
        return view('admin.rescue_champs.addHindiData');
        // $user_table = User::all();
        // return view ('usermanagement.usertable',compact('user_table'));
    }

    public function reconnectWorld()
    {
        return view('admin.reconnect_world.reconnect_world_add');
        // $user_table = User::all();
        // return view ('usermanagement.usertable',compact('user_table'));
    }


    public function reconnectQuetions()
    {
        return view('admin.reconnect_world.reconnect_world_quetions_add');
        // $user_table = User::all();
        // return view ('usermanagement.usertable',compact('user_table'));
    }

    public function cosmicEmpire()
    {
        return view('admin.coral_empire.coral_empire.coral_empire_add');
        // $user_table = User::all();
        // return view ('usermanagement.usertable',compact('user_table'));
    }

    public function cosmicEmpiretQuetions()
    {
        return view('admin.coral_empire.coral_empire_quetions_add');
        // $user_table = User::all();
        // return view ('usermanagement.usertable',compact('user_table'));
    }


    public function editSlot($id)
    {
        DB::beginTransaction();
        try {

            $data = DB::table('game_slots')->select('*')->where('id','=',$id)->get()->toArray();

            return view("admin.gameDetails.editSlots", ["data" => $data]);
        } catch (\Exception $e) {
            DB::rollback();
            //Toastr::error('fail, User Update :)', 'Error');
            return redirect()->back();
        }
    }

    public function editCosmicEmpiretQuetions($id)
    {
        DB::beginTransaction();
        try {

            $data = DB::table('coral_empire_quetions')->select('*')->where('id','=',$id)->get()->toArray();

            return view("admin.coral_empire.coral_empire_quetions_edit", ["data" => $data]);
        } catch (\Exception $e) {
            DB::rollback();
            //Toastr::error('fail, User Update :)', 'Error');
            return redirect()->back();
        }
    }

    public function editGameInfo($id)
    {
        DB::beginTransaction();
        try {

            $data = DB::table('game_info')->select('*')->where('id','=',$id)->get()->toArray();

            return view("admin.gameDetails.editGame", ["data" => $data]);
        } catch (\Exception $e) {
            DB::rollback();
            //Toastr::error('fail, User Update :)', 'Error');
            return redirect()->back();
        }
    }


    public function editReconnectQuetions($id)
    {
        DB::beginTransaction();
        try {

            $data = DB::table('reconnect_quetions')->select('*')->where('id','=',$id)->get()->toArray();

            return view("admin.reconnect_world.reconnect_world_quetions_edit", ["data" => $data]);
        } catch (\Exception $e) {
            DB::rollback();
            //Toastr::error('fail, User Update :)', 'Error');
            return redirect()->back();
        }
    }


    public function editRescueQuetions($id)
    {
        DB::beginTransaction();
        try {

            $data = DB::table('questions')->select('*')->where('id','=',$id)->get()->toArray();

            return view("admin.rescue_champs.resque_quetion_edit", ["data" => $data]);
        } catch (\Exception $e) {
            DB::rollback();
            //Toastr::error('fail, User Update :)', 'Error');
            return redirect()->back();
        }
    }

    public function editRescueHindiQuetions($id)
    {
        DB::beginTransaction();
        try {

            $data = DB::table('questions_hindi')->select('*')->where('id','=',$id)->get()->toArray();

            return view("admin.rescue_champs.hindi_resque_quetion_edit", ["data" => $data]);
        } catch (\Exception $e) {
            DB::rollback();
            //Toastr::error('fail, User Update :)', 'Error');
            return redirect()->back();
        }
    }

    public function saveGame(Request $request)
    {
        DB::beginTransaction();
        try {


           if($big_image = $request->file('big_image')) {
                    $big_image_name = $big_image->getClientOriginalName();
                    $big_imageWithoutSpaces = str_replace(' ', '_', $big_image_name); // Replace spaces with underscores
                    $random_name2 = rand(10,100).$big_imageWithoutSpaces;
                    // $file->move('public/image',$name);
                    $big_image->move(public_path() . '/uploads/', $random_name2);
          } 

           $values = [
                'game_id' => $id,
                'game_name' => $request->game_name,
                'big_img' => $random_name2,
                'about_text' => $request->about_mission,
                'duration' => $request->duration,
                'players_count' => $request->players_count
            ];
           DB::table('game_info')->insertGetId($values);
           DB::commit();

           } catch (\Exception $e) {
            DB::rollback();
            //Toastr::error('fail, User Update :)', 'Error');
            return redirect()->back();
        }
    }

    public function saveSlots(Request $request)
    {
        DB::beginTransaction();
        try {

           $values = [
                'slots' => $request->slots,
            ];
            DB::table('game_slots')->insertGetId($values);
           DB::commit();
           return redirect()->route('view_game_slots');
           } catch (\Exception $e) {
            DB::rollback();
            //Toastr::error('fail, User Update :)', 'Error');
            return redirect()->back();
        }
    }

    public function updateSlots(Request $request)
    {
        DB::beginTransaction();
        try {

            $id = $request->id;

           $values = [
                'slots' => $request->slots,
                
            ];
           DB::table('game_slots')->where('id', $id)->update($values);
           DB::commit();
           return redirect()->route('view_game_slots');
           } catch (\Exception $e) {
            DB::rollback();
            //Toastr::error('fail, User Update :)', 'Error');
            return redirect()->back();
        }
    }

    public function updateGame(Request $request)
    {
        DB::beginTransaction();
        try {

            $id = $request->id;

           if($big_image = $request->file('big_image')) {
                    $big_image_name = $big_image->getClientOriginalName();
                    $big_imageWithoutSpaces = str_replace(' ', '_', $big_image_name); // Replace spaces with underscores
                    $random_name2 = rand(10,100).$big_imageWithoutSpaces;
                    // $file->move('public/image',$name);
                    $big_image->move(public_path() . '/uploads/', $random_name2);
                    $values = [
                        'big_img' => $random_name2
                    ];
                    DB::table('game_info')->where('id', $id)->update($values);
                    DB::commit();
          } 

           $values = [
                'game_name' => $request->game_name,
                'about_text' => $request->about_mission,
                'duration_time' => $request->duration,
                'players_count' => $request->players_count
            ];
           DB::table('game_info')->where('id', $id)->update($values);
           DB::commit();
           return redirect()->route('view_games_info');
           } catch (\Exception $e) {
            DB::rollback();
            //Toastr::error('fail, User Update :)', 'Error');
            return redirect()->back();
        }
    }
    
    public function getUserList(Request $request)
    {

        $data = DB::table('users_signup')
            ->distinct()
            ->get()
            ->toArray();

        $final_array = [];
        if (!empty($data)) {
            foreach ($data as $d) {
                $query = DB::table('game_slots');
                $query->where('id', $d->game_id);
                $rows = $query->get()->toArray();
                $dataf['name'] = $d->name;
                $dataf['game_slots'] = $rows->slots;
                $final_array[] = $dataf;
            }
            // $query1 = DB::table('about_anual_report');
            // $query1->where('section_id', 5);
            // $rows1 = $query1->take(1)->first();
            // // echo '<pre>';
            // // // print_r($rows1);
            // // exit;
            // $final_array['annual_year'] = $rows1->annual_year;
            // $final_array['annual_report'] = asset('uploads/' . $rows1->annual_report);
            // $final_array['press_kit'] = asset('uploads/' . $rows1->press_kit);
            // $response_array = ['success' => true, 'data' => $final_array];

            print_r(json_encode($final_array));
            //return stripslashes(response()->json($response_array, 200));

            // dd($data);

        }
    }
    public function saveGameInfo1(Request $request)
    {
        // $this->validate($request, [
        //     'first_star' => 'required',
        //     'second_star' => 'required',
        //     'main_text_first' => 'required',
        //     'member_name' => 'required',
        //     'member_tag_line' => 'required',
        //     'first_section_title' => 'required',
        //     'first_section_text' => 'required',
        //     'second_section_title' => 'required',
        //     'third_section_title' => 'required',
        //     'third_section_text' => 'required',
        //     'fourth_section_title' => 'required',
        //     'fourth_section_text' => 'required',
        //     'fifth_section_title' => 'required',
        //     'fifth_section_text' => 'required',
        //     'sixth_section_title' => 'required',
        //     'sixth_section_text' => 'required',
        //     'seventh_section_title' => 'required',
        //     'seventh_section_text' => 'required',
        // ]);

        // print_r($request->all());
        // exit();
        DB::beginTransaction();
        try {

            if ($file = $request->file('first_screen_main_background_img')) {
                $first_screen_main_background_img = $file->getClientOriginalName();
                $first_screen_main_background_imgSpaces = str_replace(' ', '_', $first_screen_main_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_first_screen_main_background_img = rand(10, 100) . $first_screen_main_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_first_screen_main_background_img);
            }

            if ($file = $request->file('first_screen_circle_img')) {
                $first_screen_circle_img = $file->getClientOriginalName();
                $first_screen_circle_imgSpaces = str_replace(' ', '_', $first_screen_circle_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_first_screen_circle_img = rand(10, 100) . $first_screen_circle_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_first_screen_circle_img);
            }
 

            if ($file = $request->file('second_main_background_img')) {
                $second_main_background_img = $file->getClientOriginalName();
                $second_main_background_imgSpaces = str_replace(' ', '_', $second_main_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_second_main_background_img = rand(10, 100) . $second_main_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_second_main_background_img);
            }

            if ($file = $request->file('third_screen_main_background_img')) {
                $third_screen_main_background_img = $file->getClientOriginalName();
                $third_screen_main_background_imgSpaces = str_replace(' ', '_', $third_screen_main_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_third_screen_main_background_img = rand(10, 100) . $third_screen_main_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_third_screen_main_background_img);
            }


            if ($file = $request->file('nine_screen_video')) {
                $nine_screen_video = $file->getClientOriginalName();
                $nine_screen_videoSpaces = str_replace(' ', '_', $nine_screen_video); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_nine_screen_video = rand(10, 100) . $nine_screen_videoSpaces;
                $file->move(public_path() . '/uploads/', $random_nine_screen_video);
            }

            if ($file = $request->file('eleven_screen_image')) {
                $eleven_screen_image = $file->getClientOriginalName();
                $eleven_screen_imageSpaces = str_replace(' ', '_', $eleven_screen_image); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_eleven_screen_image = rand(10, 100) . $eleven_screen_imageSpaces;
                $file->move(public_path() . '/uploads/', $random_eleven_screen_image);
            }

            if ($file = $request->file('twelve_screen_image')) {
                $twelve_screen_image = $file->getClientOriginalName();
                $twelve_screen_imageSpaces = str_replace(' ', '_', $twelve_screen_image); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_twelve_screen_image = rand(10, 100) . $twelve_screen_imageSpaces;
                $file->move(public_path() . '/uploads/', $random_twelve_screen_image);
            }

            if ($file = $request->file('therteen_screen_image')) {
                $therteen_screen_image = $file->getClientOriginalName();
                $therteen_screen_imageSpaces = str_replace(' ', '_', $therteen_screen_image); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_therteen_screen_image = rand(10, 100) . $therteen_screen_imageSpaces;
                $file->move(public_path() . '/uploads/', $random_therteen_screen_image);
            }

            if ($file = $request->file('fourteen_screen_image')) {
                $fourteen_screen_image = $file->getClientOriginalName();
                $fourteen_screen_imageSpaces = str_replace(' ', '_', $fourteen_screen_image); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_fourteen_screen_image = rand(10, 100) . $fourteen_screen_imageSpaces;
                $file->move(public_path() . '/uploads/', $random_fourteen_screen_image);
            }

            $values = [
                'first_screen_title' => $request->first_screen_title,
                'first_screen_main_background_img' => $random_first_screen_main_background_img,
                'first_screen_button_text' => $request->first_screen_button_text,
                'first_screen_circle_img' => $random_first_screen_circle_img,
                'second_screen_title' => $request->second_screen_title,
                'second_main_background_img' => $random_second_main_background_img,
                'second_screen_button_text' => $request->second_screen_button_text,
                'third_screen_main_background_img' => $random_third_screen_main_background_img,
                'third_screen_wardname' => $request->third_screen_wardname,
                'eight_screen_button_text' => $request->eight_screen_button_text,
                'nine_screen_video' => $random_nine_screen_video,
                'ten_screen_text' => $request->ten_screen_text,
                'ten_screen_button_text' => $request->ten_screen_button_text,
                'eleven_screen_image' => $random_eleven_screen_image,
                'eleven_screen_text' => $request->eleven_screen_text,
                'twelve_screen_image' => $random_twelve_screen_image,
                'therteen_screen_image' => $random_therteen_screen_image,
                'fourteen_screen_image' => $random_fourteen_screen_image
            ];

            if($request->langauage == 'english')
            {
                DB::table('game1')->insert($values);
                DB::commit();
            }
            else
            {
                DB::table('rescue_champ_hindi')->insert($values);
                DB::commit();
            }
            
            return redirect()->back();
            //Toastr::success('Add data successfully :)', 'Success');

            //return redirect()->route('viewWatchData');
        } catch (\Exception $e) {
            DB::rollback();
            //Toastr::error('fail, User Update :)', 'Error');
            return redirect()->back();
        }
    }


    public function update_rescue_champs(Request $request)
    {
       
        DB::beginTransaction();
        // try {

            if ($file = $request->file('first_screen_main_background_img')) {
                $first_screen_main_background_img = $file->getClientOriginalName();
                $first_screen_main_background_imgSpaces = str_replace(' ', '_', $first_screen_main_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_first_screen_main_background_img = rand(10, 100) . $first_screen_main_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_first_screen_main_background_img);

                $values_01 = [
                    'first_screen_main_background_img' => $random_first_screen_main_background_img,
                ];
                DB::table('game1')->update($values_01);
                DB::commit();
            }

            if ($file = $request->file('first_screen_circle_img')) {
                $first_screen_circle_img = $file->getClientOriginalName();
                $first_screen_circle_imgSpaces = str_replace(' ', '_', $first_screen_circle_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_first_screen_circle_img = rand(10, 100) . $first_screen_circle_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_first_screen_circle_img);
                $values_02 = [
                    'first_screen_circle_img' => $random_first_screen_circle_img,
                ];
                DB::table('game1')->update($values_02);
                DB::commit();
            }

            if ($file = $request->file('second_main_background_img')) {
                $second_main_background_img = $file->getClientOriginalName();
                $second_main_background_imgSpaces = str_replace(' ', '_', $second_main_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_second_main_background_img = rand(10, 100) . $second_main_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_second_main_background_img);
                 $values_03 = [
                    'second_main_background_img' => $random_second_main_background_img,
                ];
                DB::table('game1')->update($values_03);
                DB::commit();
            }

            if ($file = $request->file('third_screen_main_background_img')) {
                $third_screen_main_background_img = $file->getClientOriginalName();
                $third_screen_main_background_imgSpaces = str_replace(' ', '_', $third_screen_main_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_third_screen_main_background_img = rand(10, 100) . $third_screen_main_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_third_screen_main_background_img);
                 $values_04 = [
                    'third_screen_main_background_img' => $random_third_screen_main_background_img,
                ];
                DB::table('game1')->update($values_04);
                DB::commit();
            }

            if ($file = $request->file('nine_screen_video')) {
                $nine_screen_video = $file->getClientOriginalName();
                $nine_screen_videoSpaces = str_replace(' ', '_', $nine_screen_video); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_nine_screen_video = rand(10, 100) . $nine_screen_videoSpaces;
                $file->move(public_path() . '/uploads/', $random_nine_screen_video);
                 $values_05 = [
                    'nine_screen_video' => $random_nine_screen_video,
                ];
                DB::table('game1')->update($values_05);
                DB::commit();
            }

            if ($file = $request->file('eleven_screen_image')) {
                $eleven_screen_image = $file->getClientOriginalName();
                $eleven_screen_imageSpaces = str_replace(' ', '_', $eleven_screen_image); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_eleven_screen_image = rand(10, 100) . $eleven_screen_imageSpaces;
                $file->move(public_path() . '/uploads/', $random_eleven_screen_image);
                 $values_06 = [
                    'eleven_screen_image' => $random_eleven_screen_image,
                ];
                DB::table('game1')->update($values_06);
                DB::commit();
            }

            if ($file = $request->file('twelve_screen_image')) {
                $twelve_screen_image = $file->getClientOriginalName();
                $twelve_screen_imageSpaces = str_replace(' ', '_', $twelve_screen_image); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_twelve_screen_image = rand(10, 100) . $twelve_screen_imageSpaces;
                $file->move(public_path() . '/uploads/', $random_twelve_screen_image);
                 $values_07 = [
                    'twelve_screen_image' => $random_twelve_screen_image,
                ];
                DB::table('game1')->update($values_07);
                DB::commit();
            }

            if ($file = $request->file('therteen_screen_image')) {
                $therteen_screen_image = $file->getClientOriginalName();
                $therteen_screen_imageSpaces = str_replace(' ', '_', $therteen_screen_image); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_therteen_screen_image = rand(10, 100) . $therteen_screen_imageSpaces;
                $file->move(public_path() . '/uploads/', $random_therteen_screen_image);
                 $values_08 = [
                    'therteen_screen_image' => $random_therteen_screen_image,
                ];
                DB::table('game1')->update($values_08);
                DB::commit();
            }

            if ($file = $request->file('fourteen_screen_image')) {
                $fourteen_screen_image = $file->getClientOriginalName();
                $fourteen_screen_imageSpaces = str_replace(' ', '_', $fourteen_screen_image); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_fourteen_screen_image = rand(10, 100) . $fourteen_screen_imageSpaces;
                $file->move(public_path() . '/uploads/', $random_fourteen_screen_image);
                 $values_09 = [
                    'fourteen_screen_image' => $random_fourteen_screen_image,
                ];
                DB::table('game1')->update($values_09);
                DB::commit();
            }

            $values = [
                'ticker_time' => $request->ticker_time,
                'first_screen_title' => $request->first_screen_title,
                'first_screen_button_text' => $request->first_screen_button_text,
                'second_screen_title' => $request->second_screen_title,
                'second_screen_button_text' => $request->second_screen_button_text,
                'third_screen_wardname' => $request->third_screen_wardname,
                // 'eight_screen_button_text' => $request->eight_screen_button_text, =========ITS IS NOT IN DB=================
                'ten_screen_text' => $request->ten_screen_text,
                'ten_screen_button_text' => $request->ten_screen_button_text,
                'eleven_screen_text' => $request->eleven_screen_text,
                'therteen_screen_text' => $request->therteen_screen_text,
                'fourteen_screen_text' => $request->fourteen_screen_text,
                'fourteen_screen_sub_text' => $request->fourteen_screen_sub_text,
                // 
                'right_title_text' => $request->right_title_text,
                'wrong_title_text' => $request->wrong_title_text,
                'try_again_button_text' => $request->try_again_button_text,
                'next_button_text' => $request->next_button_text,
                'enter_button_text' => $request->enter_button_text

            ];

            DB::table('game1')->update($values);
            DB::commit();
            return redirect()->back();
            //Toastr::success('Add data successfully :)', 'Success');

            //return redirect()->route('viewWatchData');
        // } catch (\Exception $e) {
        //     DB::rollback();
        //     //Toastr::error('fail, User Update :)', 'Error');
        //     return redirect()->back();
        // }
    }

    public function update_rescue_champs_hindi(Request $request)
    {
       
        DB::beginTransaction();
        // try {

            if ($file = $request->file('first_screen_main_background_img')) {
                $first_screen_main_background_img = $file->getClientOriginalName();
                $first_screen_main_background_imgSpaces = str_replace(' ', '_', $first_screen_main_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_first_screen_main_background_img = rand(10, 100) . $first_screen_main_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_first_screen_main_background_img);

                $values_01 = [
                    'first_screen_main_background_img' => $random_first_screen_main_background_img,
                ];
                DB::table('rescue_champ_hindi')->update($values_01);
                DB::commit();
            }

            if ($file = $request->file('first_screen_circle_img')) {
                $first_screen_circle_img = $file->getClientOriginalName();
                $first_screen_circle_imgSpaces = str_replace(' ', '_', $first_screen_circle_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_first_screen_circle_img = rand(10, 100) . $first_screen_circle_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_first_screen_circle_img);
                $values_02 = [
                    'first_screen_circle_img' => $random_first_screen_circle_img,
                ];
                DB::table('rescue_champ_hindi')->update($values_02);
                DB::commit();
            }

            if ($file = $request->file('second_main_background_img')) {
                $second_main_background_img = $file->getClientOriginalName();
                $second_main_background_imgSpaces = str_replace(' ', '_', $second_main_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_second_main_background_img = rand(10, 100) . $second_main_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_second_main_background_img);
                 $values_03 = [
                    'second_main_background_img' => $random_second_main_background_img,
                ];
                DB::table('rescue_champ_hindi')->update($values_03);
                DB::commit();
            }

            if ($file = $request->file('third_screen_main_background_img')) {
                $third_screen_main_background_img = $file->getClientOriginalName();
                $third_screen_main_background_imgSpaces = str_replace(' ', '_', $third_screen_main_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_third_screen_main_background_img = rand(10, 100) . $third_screen_main_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_third_screen_main_background_img);
                 $values_04 = [
                    'third_screen_main_background_img' => $random_third_screen_main_background_img,
                ];
                DB::table('rescue_champ_hindi')->update($values_04);
                DB::commit();
            }

            if ($file = $request->file('nine_screen_video')) {
                $nine_screen_video = $file->getClientOriginalName();
                $nine_screen_videoSpaces = str_replace(' ', '_', $nine_screen_video); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_nine_screen_video = rand(10, 100) . $nine_screen_videoSpaces;
                $file->move(public_path() . '/uploads/', $random_nine_screen_video);
                 $values_05 = [
                    'nine_screen_video' => $random_nine_screen_video,
                ];
                DB::table('rescue_champ_hindi')->update($values_05);
                DB::commit();
            }

            if ($file = $request->file('eleven_screen_image')) {
                $eleven_screen_image = $file->getClientOriginalName();
                $eleven_screen_imageSpaces = str_replace(' ', '_', $eleven_screen_image); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_eleven_screen_image = rand(10, 100) . $eleven_screen_imageSpaces;
                $file->move(public_path() . '/uploads/', $random_eleven_screen_image);
                 $values_06 = [
                    'eleven_screen_image' => $random_eleven_screen_image,
                ];
                DB::table('rescue_champ_hindi')->update($values_06);
                DB::commit();
            }

            if ($file = $request->file('twelve_screen_image')) {
                $twelve_screen_image = $file->getClientOriginalName();
                $twelve_screen_imageSpaces = str_replace(' ', '_', $twelve_screen_image); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_twelve_screen_image = rand(10, 100) . $twelve_screen_imageSpaces;
                $file->move(public_path() . '/uploads/', $random_twelve_screen_image);
                 $values_07 = [
                    'twelve_screen_image' => $random_twelve_screen_image,
                ];
                DB::table('rescue_champ_hindi')->update($values_07);
                DB::commit();
            }

            if ($file = $request->file('therteen_screen_image')) {
                $therteen_screen_image = $file->getClientOriginalName();
                $therteen_screen_imageSpaces = str_replace(' ', '_', $therteen_screen_image); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_therteen_screen_image = rand(10, 100) . $therteen_screen_imageSpaces;
                $file->move(public_path() . '/uploads/', $random_therteen_screen_image);
                 $values_08 = [
                    'therteen_screen_image' => $random_therteen_screen_image,
                ];
                DB::table('rescue_champ_hindi')->update($values_08);
                DB::commit();
            }

            if ($file = $request->file('fourteen_screen_image')) {
                $fourteen_screen_image = $file->getClientOriginalName();
                $fourteen_screen_imageSpaces = str_replace(' ', '_', $fourteen_screen_image); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_fourteen_screen_image = rand(10, 100) . $fourteen_screen_imageSpaces;
                $file->move(public_path() . '/uploads/', $random_fourteen_screen_image);
                 $values_09 = [
                    'fourteen_screen_image' => $random_fourteen_screen_image,
                ];
                DB::table('rescue_champ_hindi')->update($values_09);
                DB::commit();
            }

            $values = [
                'ticker_time' => $request->ticker_time,
                'first_screen_title' => $request->first_screen_title,
                'first_screen_button_text' => $request->first_screen_button_text,
                'second_screen_title' => $request->second_screen_title,
                'second_screen_button_text' => $request->second_screen_button_text,
                'third_screen_wardname' => $request->third_screen_wardname,
                'eight_screen_button_text' => $request->eight_screen_button_text, // =========ITS IS NOT IN DB================= //
                'ten_screen_text' => $request->ten_screen_text,
                'ten_screen_button_text' => $request->ten_screen_button_text,
                'eleven_screen_text' => $request->eleven_screen_text,
                'therteen_screen_text' => $request->therteen_screen_text,
                'fourteen_screen_text' => $request->fourteen_screen_text,
                'fourteen_screen_sub_text' => $request->fourteen_screen_sub_text,
                  // 
                  'right_title_text' => $request->right_title_text,
                  'wrong_title_text' => $request->wrong_title_text,
                  'try_again_button_text' => $request->try_again_button_text,
                  'next_button_text' => $request->next_button_text,
                  'enter_button_text' => $request->enter_button_text
            ];

            DB::table('rescue_champ_hindi')->update($values);
            DB::commit();
            return redirect()->back();
            //Toastr::success('Add data successfully :)', 'Success');

            //return redirect()->route('viewWatchData');
        // } catch (\Exception $e) {
        //     DB::rollback();
        //     //Toastr::error('fail, User Update :)', 'Error');
        //     return redirect()->back();
        // }
    }

    public function editRescueHindi()
    {
        // return view('admin.rescue_champs.edit_HindiData');

        $data_img = DB::table('rescue_champ_hindi')->select('*')->distinct()->get()->toArray();
        return view('admin.rescue_champs.edit_HindiData', ['data_img' => $data_img]);
    }

// -------------------------------------------------------GAME 2 STARTS----------------------------------------------------------

   

    public function addGame2()
    {
        
        return view('admin.addgame2');
    }


    public function saveGameInfo2(Request $request)
    {
       
       

        DB::beginTransaction();
        // try {
            $random_Bgvideo1 = '';
            if ($file = $request->file('Bgvideo1')) {
                $Bgvideo1 = $file->getClientOriginalName();
                $Bgvideo1_imgSpaces = str_replace(' ', '_', $Bgvideo1);
                $random_Bgvideo1 = rand(10, 100) . $Bgvideo1_imgSpaces;
                $file->move(public_path() . '/uploads/game2/', $random_Bgvideo1);
            }
            $random_S1Image = '';
            if ($file = $request->file('S1Image')) {
                $S1Image = $file->getClientOriginalName();
                $S1Image_imgSpaces = str_replace(' ', '_', $S1Image);
                $random_S1Image = rand(10, 100) . $S1Image_imgSpaces;
                $file->move(public_path() . '/uploads/game2/', $random_S1Image);
            }
            // S1 ENDS
            $random_Bgvideo2 = '';
            if ($file = $request->file('Bgvideo2')) {
                $Bgvideo2 = $file->getClientOriginalName();
                $Bgvideo2_imgSpaces = str_replace(' ', '_', $Bgvideo2);
                $random_Bgvideo2 = rand(10, 100) . $Bgvideo2_imgSpaces;
                $file->move(public_path() . '/uploads/game2/', $random_Bgvideo2);
            }
            $random_S2Image = '';
            if ($file = $request->file('S2Image')) {
                $S2Image = $file->getClientOriginalName();
                $S2Image_imgSpaces = str_replace(' ', '_', $S2Image);
                $random_S2Image = rand(10, 100) . $S2Image_imgSpaces;
                $file->move(public_path() . '/uploads/game2/', $random_S2Image);
            }
            // S2 ENDS
              $random_S4RightImage = '';
            if ($file = $request->file('S4RightImage')) {
                $S4RightImage = $file->getClientOriginalName();
                $S4RightImage_imgSpaces = str_replace(' ', '_', $S4RightImage);
                $random_S4RightImage = rand(10, 100) . $S4RightImage_imgSpaces;
                $file->move(public_path() . '/uploads/game2/', $random_S4RightImage);
            }
            // S4 ENDS
              $random_S5Bgimage = '';
            if ($file = $request->file('S5Bgimage')) {
                $S5Bgimage = $file->getClientOriginalName();
                $S5Bgimage_imgSpaces = str_replace(' ', '_', $S5Bgimage);
                $random_S5Bgimage = rand(10, 100) . $S5Bgimage_imgSpaces;
                $file->move(public_path() . '/uploads/game2/', $random_S5Bgimage);
            }
           
              $random_S5QuestionImage = '';
            if ($file = $request->file('S5QuestionImage')) {
                $S5QuestionImage = $file->getClientOriginalName();
                $S5QuestionImage_imgSpaces = str_replace(' ', '_', $S5QuestionImage);
                $random_S5QuestionImage = rand(10, 100) . $S5QuestionImage_imgSpaces;
                $file->move(public_path() . '/uploads/game2/', $random_S5QuestionImage);
            }
            // S5 ENDS
            $values = [
                'Bgvideo1' => ($random_Bgvideo1 == '') ? '' : $random_Bgvideo1,
                'S1headline' => $request->S1headline,
                'S1FirstText' => $request->S1FirstText,
                'S1SecondText' => $request->S1SecondText,
                'S1Enter' => $request->S1Enter,
                // 'S1Image' => $random_S1Image,
                'S1Image' => ($random_S1Image == '') ? '' : $random_S1Image,
                // S1 ENDS
                // 'Bgvideo2' => $random_Bgvideo2,
                'Bgvideo2' => ($random_Bgvideo2 == '') ? '' : $random_Bgvideo2,
                // 'S2Image' => $random_S2Image,
                'S2Image' => ($random_S2Image == '') ? '' : $random_S2Image,
                'S2Enter' => $request->S2Enter,
                // S2 ENDS
                'S3Infotext' => $request->S3Infotext,
                'S3Enter' => $request->S3Enter,
                // S3 ENDS
                'S4Infotext' => $request->S4Infotext,
                'S4Question' => $request->S4Question,
                'S4Answer1' => $request->S4Answer1,
                'S4Answer2' => $request->S4Answer2,
                'S4Submit' => $request->S4Submit,
                'S4Rightanswer' => $request->S4Rightanswer,
                // 'S4RightImage' => $random_S4RightImage,
                'S4RightImage' => ($random_S4RightImage == '') ? '' : $random_S4RightImage,
                'S4RightFact' => $request->S4RightFact,
                'S4Next' => $request->S4Next,
                'S4Wronganswer' => $request->S4Wronganswer,
                'S4Tryagain' => $request->S4Tryagain,
                // S4 ENDS
                // 'S5Bgimage' => $random_S5Bgimage,
                'S5Bgimage' => ($random_S5Bgimage == '') ? '' : $random_S5Bgimage,
                'S5Infotext1' => $request->S5Infotext1,
                'S5Infotext2' => $request->S5Infotext2,
                'S5Enter' => $request->S5Enter,
                // 'S5QuestionImage' => $random_S5QuestionImage,
                'S5QuestionImage' => ($random_S5QuestionImage == '') ? '' : $random_S5QuestionImage,
                'S5Question' => $request->S5Question,
                'S5Submit' => $request->S5Submit,
                'S5Answer' => $request->S5Answer,
                'S5Rightanswer' => $request->S5Rightanswer,
                'S5RightFact' => $request->S5RightFact,
                'S5Next' => $request->S5Next,
                'S5Wronganswer' => $request->S5Wronganswer,
                'S5Tryagain' => $request->S5Tryagain,
                // S5 ENDS

                'S6Infotext' => $request->S6Infotext,
                'S6Enter' => $request->S6Enter,
                'S6Question' => $request->S6Question,
                'S6Answer' => $request->S6Answer,
                'S6Submit' => $request->S6Submit,
                'S6Rightanswer' => $request->S6Rightanswer,
                'S6RightFact' => $request->S6RightFact,
                'S6Next' => $request->S6Next,
                'S6Wronganswer' => $request->S6Wronganswer,
                'S6Tryagain' => $request->S6Tryagain,
                // S6 ENDS

                'S7Infotext' => $request->S7Infotext,
                'S7Enter' => $request->S7Enter,
                // S7 ENDS

                'S8Question' => $request->S8Question,
                'S8Answer1' => $request->S8Answer1,
                'S8Answer2' => $request->S8Answer2,
                'S8Submit' => $request->S8Submit,
                'S8Rightanswer' => $request->S8Rightanswer,
                'S8RightFact' => $request->S8RightFact,
                'S8Next' => $request->S8Next,
                'S8Wronganswer' => $request->S8Wronganswer,
                'S8Tryagain' => $request->S8Tryagain,
                // S8 ENDS

                'S9Infotext' => $request->S9Infotext,
                'S9Enter' => $request->S9Enter,
                // S9 ENDS

                'S10Infotext' => $request->S10Infotext,
                'S10Enter' => $request->S10Enter,
                // S10 ENDS

                'S11Title' => $request->S11Title,
                'S11Infotext' => $request->S11Infotext,
                // S11 ENDS

            ];

            DB::table('cosmic_cleanup')->insert($values);
            DB::commit();
            return redirect()->back();
            //Toastr::success('Add data successfully :)', 'Success');

            //return redirect()->route('viewWatchData');
        // } 
        // catch (\Exception $e) {
        //     DB::rollback();
        //     //Toastr::error('fail, User Update :)', 'Error');
        //     return redirect()->back();
        // }
    }



    public function updateGameInfo2(Request $request)
    {

        DB::beginTransaction();
        // try {

        if ($file = $request->file('Bgvideo1')) {
            $Bgvideo1 = $file->getClientOriginalName();
            $Bgvideo1_imgSpaces = str_replace(' ', '_', $Bgvideo1);
            $random_Bgvideo1 = rand(10, 100) . $Bgvideo1_imgSpaces;
            $file->move(public_path() . '/uploads/game2/', $random_Bgvideo1);

            $values_01 = [
                'Bgvideo1' => $random_Bgvideo1,
            ];
            DB::table('cosmic_cleanup')->update($values_01);
            DB::commit();
        }

        if ($file = $request->file('S1Image')) {
            $S1Image = $file->getClientOriginalName();
            $S1Image_imgSpaces = str_replace(' ', '_', $S1Image);
            $random_S1Image = rand(10, 100) . $S1Image_imgSpaces;
            $file->move(public_path() . '/uploads/game2/', $random_S1Image);
            $values_02 = [
                'S1Image' => $random_S1Image,
            ];
            DB::table('cosmic_cleanup')->update($values_02);
            DB::commit();
        }

        // S1 ENDS

        if ($file = $request->file('Bgvideo2')) {
            $Bgvideo2 = $file->getClientOriginalName();
            $Bgvideo2_imgSpaces = str_replace(' ', '_', $Bgvideo2);
            $random_Bgvideo2 = rand(10, 100) . $Bgvideo2_imgSpaces;
            $file->move(public_path() . '/uploads/game2/', $random_Bgvideo2);
            $values_03 = [
                'Bgvideo2' => $random_Bgvideo2,
            ];
            DB::table('cosmic_cleanup')->update($values_03);
            DB::commit();
        }

        if ($file = $request->file('S2Image')) {
            $S2Image = $file->getClientOriginalName();
            $S2Image_imgSpaces = str_replace(' ', '_', $S2Image);
            $random_S2Image = rand(10, 100) . $S2Image_imgSpaces;
            $file->move(public_path() . '/uploads/game2/', $random_S2Image);
            $values_04 = [
                'S2Image' => $random_S2Image,
            ];
            DB::table('cosmic_cleanup')->update($values_04);
            DB::commit();
        }
        // S2 ENDS

        if ($file = $request->file('S4RightImage')) {
            $S4RightImage = $file->getClientOriginalName();
            $S4RightImage_imgSpaces = str_replace(' ', '_', $S4RightImage);
            $random_S4RightImage = rand(10, 100) . $S4RightImage_imgSpaces;
            $file->move(public_path() . '/uploads/game2/', $random_S4RightImage);
            $values_05 = [
                'S4RightImage' => $random_S4RightImage,
            ];
            DB::table('cosmic_cleanup')->update($values_05);
            DB::commit();
        }
        // S4 ENDS

        if ($file = $request->file('S5Bgimage')) {
            $S5Bgimage = $file->getClientOriginalName();
            $S5Bgimage_imgSpaces = str_replace(' ', '_', $S5Bgimage);
            $random_S5Bgimage = rand(10, 100) . $S5Bgimage_imgSpaces;
            $file->move(public_path() . '/uploads/game2/', $random_S5Bgimage);
            $values_06 = [
                'S5Bgimage' => $random_S5Bgimage,
            ];
            DB::table('cosmic_cleanup')->update($values_06);
            DB::commit();
        }

        if ($file = $request->file('S5QuestionImage')) {
            $S5QuestionImage = $file->getClientOriginalName();
            $S5QuestionImage_imgSpaces = str_replace(' ', '_', $S5QuestionImage);
            $random_S5QuestionImage = rand(10, 100) . $S5QuestionImage_imgSpaces;
            $file->move(public_path() . '/uploads/game2/', $random_S5QuestionImage);
            $values_07 = [
                'S5QuestionImage' => $random_S5QuestionImage,
            ];
            DB::table('cosmic_cleanup')->update($values_07);
            DB::commit();
        }
        // S5 ENDS

        // ------------------------------------------
        
        if ($file = $request->file('Bgvideo3')) {
            $Bgvideo3 = $file->getClientOriginalName();
            $Bgvideo3_imgSpaces = str_replace(' ', '_', $Bgvideo3);
            $random_Bgvideo3 = rand(10, 100) . $Bgvideo3_imgSpaces;
            $file->move(public_path() . '/uploads/game2/', $random_Bgvideo3);
              $values_08 = [
                'Bgvideo3' => $random_Bgvideo3,
            ];
            DB::table('cosmic_cleanup')->update($values_08);
            DB::commit();
        }
       
        if ($file = $request->file('Bgvideo4')) {
            $Bgvideo4 = $file->getClientOriginalName();
            $Bgvideo4_imgSpaces = str_replace(' ', '_', $Bgvideo4);
            $random_Bgvideo4 = rand(10, 100) . $Bgvideo4_imgSpaces;
            $file->move(public_path() . '/uploads/game2/', $random_Bgvideo4);
              $values_06 = [
                'S5Bgimage' => $random_S5Bgimage,
            ];
            DB::table('cosmic_cleanup')->update($values_06);
            DB::commit();
        }
   
        if ($file = $request->file('Bgvideo5')) {
            $Bgvideo5 = $file->getClientOriginalName();
            $Bgvideo5_imgSpaces = str_replace(' ', '_', $Bgvideo5);
            $random_Bgvideo5 = rand(10, 100) . $Bgvideo5_imgSpaces;
            $file->move(public_path() . '/uploads/game2/', $random_Bgvideo5);
              $values_06 = [
                'Bgvideo5' => $random_Bgvideo5,
            ];
            DB::table('cosmic_cleanup')->update($values_06);
            DB::commit();}

       
        if ($file = $request->file('Bgvideo6')) {
            $Bgvideo6 = $file->getClientOriginalName();
            $Bgvideo6_imgSpaces = str_replace(' ', '_', $Bgvideo6);
            $random_Bgvideo6 = rand(10, 100) . $Bgvideo6_imgSpaces;
            $file->move(public_path() . '/uploads/game2/', $random_Bgvideo6);
              $values_06 = [
                'Bgvideo6' => $random_Bgvideo6,
            ];
            DB::table('cosmic_cleanup')->update($values_06);
            DB::commit();
        }
      
        if ($file = $request->file('Bgvideo7')) {
            $Bgvideo7 = $file->getClientOriginalName();
            $Bgvideo7_imgSpaces = str_replace(' ', '_', $Bgvideo7);
            $random_Bgvideo7 = rand(10, 100) . $Bgvideo7_imgSpaces;
            $file->move(public_path() . '/uploads/game2/', $random_Bgvideo7);
              $values_06 = [
                'Bgvideo7' => $random_Bgvideo7,
            ];
            DB::table('cosmic_cleanup')->update($values_06);
            DB::commit();
        }
        
        if ($file = $request->file('Bgvideo8')) {
            $Bgvideo8 = $file->getClientOriginalName();
            $Bgvideo8_imgSpaces = str_replace(' ', '_', $Bgvideo8);
            $random_Bgvideo8 = rand(10, 100) . $Bgvideo8_imgSpaces;
            $file->move(public_path() . '/uploads/game2/', $random_Bgvideo8);
              $values_06 = [
                'Bgvideo8' => $random_Bgvideo8,
            ];
            DB::table('cosmic_cleanup')->update($values_06);
            DB::commit();
        }

      
        if ($file = $request->file('Bgvideo9')) {
            $Bgvideo9 = $file->getClientOriginalName();
            $Bgvideo9_imgSpaces = str_replace(' ', '_', $Bgvideo9);
            $random_Bgvideo9 = rand(10, 100) . $Bgvideo9_imgSpaces;
            $file->move(public_path() . '/uploads/game2/', $random_Bgvideo9);
              $values_06 = [
                'Bgvideo9' => $random_Bgvideo9,
            ];
            DB::table('cosmic_cleanup')->update($values_06);
            DB::commit();
        }
       
        if ($file = $request->file('Bgvideo10')) {
            $Bgvideo10 = $file->getClientOriginalName();
            $Bgvideo10_imgSpaces = str_replace(' ', '_', $Bgvideo10);
            $random_Bgvideo10 = rand(10, 100) . $Bgvideo10_imgSpaces;
            $file->move(public_path() . '/uploads/game2/', $random_Bgvideo10);
              $values_06 = [
                'Bgvideo10' => $random_Bgvideo10,
            ];
            DB::table('cosmic_cleanup')->update($values_06);
            DB::commit();
        }
      
        if ($file = $request->file('Bgvideo11')) {
            $Bgvideo11 = $file->getClientOriginalName();
            $Bgvideo11_imgSpaces = str_replace(' ', '_', $Bgvideo11);
            $random_Bgvideo11 = rand(10, 100) . $Bgvideo11_imgSpaces;
            $file->move(public_path() . '/uploads/game2/', $random_Bgvideo11);
            $values_06 = [
                'Bgvideo11' => $random_Bgvideo11,
            ];
            DB::table('cosmic_cleanup')->update($values_06);
            DB::commit();
        }

        $values = [
            'ticker_time' => $request->ticker_time,
            'S1headline' => $request->S1headline,
            'S1FirstText' => $request->S1FirstText,
            'S1SecondText' => $request->S1SecondText,
            'S1Enter' => $request->S1Enter,
            // 'S1Image' => $random_S1Image,
            // S1 ENDS
            // 'Bgvideo2' => $random_Bgvideo2,
            // 'S2Image' => $random_S2Image,

            'S2Infotext' => $request->S2Infotext,
            'S2Enter' => $request->S2Enter,
            // S2 ENDS
            'S3Infotext' => $request->S3Infotext,
            'S3Enter' => $request->S3Enter,
            'S3subtext' => $request->S3subtext,
            'S3enter_two' => $request->S3enter_two,
            // S3 ENDS
            'S4Infotext' => $request->S4Infotext,
            'S4Question' => $request->S4Question,
            'S4Answer1' => $request->S4Answer1,
            'S4Answer2' => $request->S4Answer2,
            'S4Submit' => $request->S4Submit,
            'S4Rightanswer' => $request->S4Rightanswer,
            // 'S4RightImage' => $random_S4RightImage,
            'S4RightFact' => $request->S4RightFact,
            'S4Next' => $request->S4Next,
            'S4Wronganswer' => $request->S4Wronganswer,
            'S4Tryagain' => $request->S4Tryagain,
            // S4 ENDS
            // 'S5Bgimage' => $random_S5Bgimage,
            'S5Infotext1' => $request->S5Infotext1,
            'S5Infotext2' => $request->S5Infotext2,
            'S5Enter' => $request->S5Enter,
            // 'S5QuestionImage' => $random_S5QuestionImage,
            'S5Question' => $request->S5Question,
            'S5Submit' => $request->S5Submit,
            'S5Answer' => $request->S5Answer,
            'S5Answer_2' => $request->S5Answer_2,
            'S5Rightanswer' => $request->S5Rightanswer,
            'S5RightFact' => $request->S5RightFact,
            'S5Next' => $request->S5Next,
            'S5WrongInfo' => $request->S5WrongInfo,
            'S5Wronganswer' => $request->S5Wronganswer,
            'S5Tryagain' => $request->S5Tryagain,
            // S5 ENDS

            'S6Infotext' => $request->S6Infotext,
            'S6Enter' => $request->S6Enter,
            'S6Question' => $request->S6Question,
            'S6Answer' => $request->S6Answer,
            'S6Submit' => $request->S6Submit,
            'S6Rightanswer' => $request->S6Rightanswer,
            'S6RightFact' => $request->S6RightFact,
            'S6Next' => $request->S6Next,
            'S6Wronganswer' => $request->S6Wronganswer,
            'S6Tryagain' => $request->S6Tryagain,
            // S6 ENDS

            'S7Infotext' => $request->S7Infotext,
            'S7Enter' => $request->S7Enter,
            // S7 ENDS

            'S8Question' => $request->S8Question,
            'S8Answer1' => $request->S8Answer1,
            'S8Answer2' => $request->S8Answer2,
            'S8Submit' => $request->S8Submit,
            'S8Rightanswer' => $request->S8Rightanswer,
            'S8RightFact' => $request->S8RightFact,
            'S8Next' => $request->S8Next,
            'S8Wronganswer' => $request->S8Wronganswer,
            'S8Tryagain' => $request->S8Tryagain,
            // S8 ENDS

            'S9Infotext' => $request->S9Infotext,
            'S9Enter' => $request->S9Enter,
            // S9 ENDS

            'S10Infotext' => $request->S10Infotext,
            'S10Enter' => $request->S10Enter,
            // S10 ENDS

            'S11Title' => $request->S11Title,
            'S11Infotext' => $request->S11Infotext,
            // S11 ENDS

        ];

        DB::table('cosmic_cleanup')->update($values);
        DB::commit();
        return redirect()->back();

    }
// -------------------------------------------------------GAME 3 STARTS----------------------------------------------------------
    public function saveReconnectWorld(Request $request)
    {
            if ($file = $request->file('background_img')) {
                $background_img = $file->getClientOriginalName();
                $background_imgSpaces = str_replace(' ', '_', $background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_background_img = rand(10, 100) . $background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_background_img);
            }

            if ($file = $request->file('first_screen_circle_img')) {
                $first_screen_circle_img = $file->getClientOriginalName();
                $first_screen_circle_imgSpaces = str_replace(' ', '_', $first_screen_circle_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_first_screen_circle_img = rand(10, 100) . $first_screen_circle_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_first_screen_circle_img);
            }
 

            if ($file = $request->file('second_screen_bakground_img')) {
                $second_screen_bakground_img = $file->getClientOriginalName();
                $second_screen_bakground_imgSpaces = str_replace(' ', '_', $second_screen_bakground_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_second_screen_bakground_center_img = rand(10, 100) . $second_screen_bakground_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_second_screen_bakground_center_img);
            }

            if ($file = $request->file('third_screen_main_background_img')) {
                $third_screen_main_background_img = $file->getClientOriginalName();
                $third_screen_main_background_imgSpaces = str_replace(' ', '_', $third_screen_main_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_third_screen_main_background_img = rand(10, 100) . $third_screen_main_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_third_screen_main_background_img);
            }


            if ($file = $request->file('second_screen_bakground_center_img')) {
                $second_screen_center_img = $file->getClientOriginalName();
                $second_screen_center_imgSpaces = str_replace(' ', '_', $second_screen_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_second_screen_center_img = rand(10, 100) . $second_screen_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_second_screen_center_img);
            }

            if ($file = $request->file('third_background_img')) {
                $third_background_img = $file->getClientOriginalName();
                $third_background_imgSpaces = str_replace(' ', '_', $third_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_third_background_img = rand(10, 100) . $third_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_third_background_img);
            }

            if ($file = $request->file('third_screen_bakground_center_img')) {
                $third_screen_bakground_center_img = $file->getClientOriginalName();
                $third_screen_bakground_center_imgSpaces = str_replace(' ', '_', $third_screen_bakground_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_third_screen_bakground_center_img = rand(10, 100) . $third_screen_bakground_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_third_screen_bakground_center_img);
            }

            if ($file = $request->file('fourth_screen_background_img')) {
                $fourth_screen_background_img = $file->getClientOriginalName();
                $fourth_screen_background_imgSpaces = str_replace(' ', '_', $fourth_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_fourth_screen_background_img = rand(10, 100) . $fourth_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_fourth_screen_background_img);
            }

            if ($file = $request->file('fourth_screen_center_img')) {
                $fourth_screen_center_img = $file->getClientOriginalName();
                $fourth_screen_center_imgSpaces = str_replace(' ', '_', $fourth_screen_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_fourth_screen_center_img = rand(10, 100) . $fourth_screen_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_fourth_screen_center_img);
            }

            if ($file = $request->file('fourth_screen_img')) {
                $fourth_screen_img = $file->getClientOriginalName();
                $fourth_screen_imgSpaces = str_replace(' ', '_', $fourth_screen_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_fourth_screen_img = rand(10, 100) . $fourth_screen_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_fourth_screen_img);
            }

            if ($file = $request->file('fifth_screen_background_img')) {
                $fifth_screen_background_img = $file->getClientOriginalName();
                $fifth_screen_background_imgSpaces = str_replace(' ', '_', $fifth_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_fifth_screen_background_img = rand(10, 100) . $fifth_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_fifth_screen_background_img);
            }

            if ($file = $request->file('fifth_screen_background_centerimg')) {
                $fifth_screen_background_centerimg = $file->getClientOriginalName();
                $fifth_screen_background_centerimgSpaces = str_replace(' ', '_', $fifth_screen_background_centerimg); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_fifth_screen_background_centerimg = rand(10, 100) . $fifth_screen_background_centerimgSpaces;
                $file->move(public_path() . '/uploads/', $random_fifth_screen_background_centerimg);
            }

            if ($file = $request->file('fifth_screen_img')) {
                $fifth_screen_img = $file->getClientOriginalName();
                $fifth_screen_imgSpaces = str_replace(' ', '_', $fifth_screen_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_fifth_screen_img = rand(10, 100) . $fifth_screen_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_fifth_screen_img);
            }

            if ($file = $request->file('sixth_screen_background_img')) {
                $sixth_screen_background_img = $file->getClientOriginalName();
                $sixth_screen_background_imgSpaces = str_replace(' ', '_', $sixth_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_sixth_screen_background_img = rand(10, 100) . $sixth_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_sixth_screen_background_img);
            }

            if ($file = $request->file('sixth_screen_background_center_img')) {
                $sixth_screen_background_center_img = $file->getClientOriginalName();
                $sixth_screen_background_center_imgSpaces = str_replace(' ', '_', $sixth_screen_background_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_sixth_screen_background_center_img = rand(10, 100) . $sixth_screen_background_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_sixth_screen_background_center_img);
            }

            if ($file = $request->file('sixth_screen_img')) {
                $sixth_screen_img = $file->getClientOriginalName();
                $sixth_screen_imgSpaces = str_replace(' ', '_', $sixth_screen_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_sixth_screen_img = rand(10, 100) . $sixth_screen_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_sixth_screen_img);
            }

            if ($file = $request->file('sevanth_screen_background_img')) {
                $sevanth_screen_background_img = $file->getClientOriginalName();
                $sevanth_screen_background_imgSpaces = str_replace(' ', '_', $sevanth_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_sevanth_screen_background_img = rand(10, 100) . $sevanth_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_sevanth_screen_background_img);
            }

            if ($file = $request->file('sevanth_screen_background_center_img')) {
                $sevanth_screen_background_center_img = $file->getClientOriginalName();
                $sevanth_screen_background_center_imgSpaces = str_replace(' ', '_', $sevanth_screen_background_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_sevanth_screen_background_center_img = rand(10, 100) . $sevanth_screen_background_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_sevanth_screen_background_center_img);
            }

            if ($file = $request->file('sevanth_screen_img')) {
                $sevanth_screen_img = $file->getClientOriginalName();
                $sevanth_screen_imgSpaces = str_replace(' ', '_', $sevanth_screen_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_sevanth_screen_img = rand(10, 100) . $sevanth_screen_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_sevanth_screen_img);
            }

            if ($file = $request->file('final_screen_background_img')) {
                $final_screen_background_img = $file->getClientOriginalName();
                $final_screen_background_imgSpaces = str_replace(' ', '_', $final_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_final_screen_background_img = rand(10, 100) . $final_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_final_screen_background_img);
            }

            if ($file = $request->file('final_screen_img')) {
                $final_screen_img = $file->getClientOriginalName();
                $final_screen_imgSpaces = str_replace(' ', '_', $final_screen_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_final_screen_img = rand(10, 100) . $final_screen_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_final_screen_img);
            }

            if ($file = $request->file('answer_background_img')) {
                $answer_background_img = $file->getClientOriginalName();
                $answer_background_imgSpaces = str_replace(' ', '_', $answer_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_answer_background_img = rand(10, 100) . $answer_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_answer_background_img);
            }

            $values = [
                'first_screen_title' => $request->first_screen_title,
                'description_first' => $request->description_first,
                'description_second' => $request->description_second,
                'background_img' => $random_background_img,
                'first_screen_circle_img' => $random_first_screen_circle_img,
                'button_text' => $request->button_text,
                'bottom_line_text' => $request->bottom_line_text,
                'second_screen_title' => $request->second_screen_title,
                'second_screen_bakground_img' => $random_second_screen_bakground_img,
                'second_screen_bakground_center_img' => $random_second_screen_bakground_center_img,
                'second_screen_text' => $request->second_screen_text,
                'second_screen_password' => $request->second_screen_password,
                'second_screen_bottom_line_text' => $request->second_screen_bottom_line_text,
                'second_screen_button_text' => $request->second_screen_button_text,
                'third_background_img' => $random_third_background_img,
                'third_screen_bakground_center_img' => $random_third_screen_bakground_center_img,
                'fourth_screen_background_img' => $random_fourth_screen_background_img,
                'fourth_screen_center_img' => $random_fourth_screen_center_img,
                'fourth_screen_img' => $random_fourth_screen_img,
                'fourth_screen_button' => $request->fourth_screen_button,
                'fourth_screen_text' => $request->fourth_screen_text,
                'fifth_screen_background_img' => $random_fifth_screen_background_img,
                'fifth_screen_background_centerimg' => $random_fifth_screen_background_centerimg,
                'fifth_screen_text' => $request->fifth_screen_text,
                'fifth_screen_img' => $random_fifth_screen_img,
                'fifth_screen_button_text' => $request->fifth_screen_button_text,
                'sixth_screen_background_img' => $random_sixth_screen_background_img,
                'sixth_screen_background_center_img' => $random_sixth_screen_background_center_img,
                'sixth_screen_img' => $random_sixth_screen_img,
                'sixth_text' => $request->sixth_text,
                'sevanth_screen_background_img' => $random_sevanth_screen_background_img,
                'sevanth_screen_background_center_img' => $random_sevanth_screen_background_center_img,
                'sevanth_screen_img' => $random_sevanth_screen_img,
                'sevanth_text' => $request->sevanth_text,
                'sevanth_screen_option' => $request->sevanth_screen_option,
                'final_screen_background_img' => $random_final_screen_background_img,
                'final_screen_img' => $random_final_screen_img,
                'final_screen_title' => $request->final_screen_title,
                'final_screen_bottom_text' => $request->final_screen_bottom_text,
                'answer_background_img' => $random_answer_background_img
            ];

            DB::table('reconnect_world')->insert($values);
            DB::commit();
    }

     public function saveReconnectQuetions(Request $request)
    {
          if($background_img = $request->file('background_img')) {
                    $background_img_name = $background_img->getClientOriginalName();
                    $background_imgWithoutSpaces = str_replace(' ', '_', $background_img_name); // Replace spaces with underscores
                    $random_name = rand(10,100).$background_imgWithoutSpaces;
                    // $file->move('public/image',$name);
                    $background_img->move(public_path() . '/uploads/', $random_name);
          }

          // if($mcq_images = $request->file('mcq_images')) {
          //           $mcq_images_name = $mcq_images->getClientOriginalName();
          //           $mcq_imagesWithoutSpaces = str_replace(' ', '_', $mcq_images_name); // Replace spaces with underscores
          //           $random_name1 = rand(10,100).$mcq_imagesWithoutSpaces;
          //           // $file->move('public/image',$name);
          //           $mcq_images->move(public_path() . '/uploads/', $random_name1);
          // }

          $values = [
                'quetions' => $request->quetions,
                'answer' => $request->answer,
                'background_img' => (empty($random_name)) ? Null : $random_name,
                'right_answer_fact' => $request->right_answer_fact,
                'wrong_answer_fact' => $request->wrong_answer_fact,
                'mcq_options' => $request->mcq_options,
                'mcq_correct_answer' => $request->mcq_correct_answer
            ];
           DB::table('reconnect_quetions')->insertGetId($values);
           DB::commit();
        // DB::beginTransaction();
        // try {


        //    } catch (\Exception $e) {
        //     DB::rollback();
        //     //Toastr::error('fail, User Update :)', 'Error');
        //     return redirect()->back();
        // }
    }
// -------------------------------------------------------GAME 4 STARTS----------------------------------------------------------

    public function saveCosmicEmpire(Request $request)
    {
            if ($file = $request->file('first_screen_background_img')) {
                $first_screen_background_img = $file->getClientOriginalName();
                $first_screen_background_imgSpaces = str_replace(' ', '_', $first_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_first_screen_background_img = rand(10, 100) . $first_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_first_screen_background_img);
            }

             if ($file = $request->file('first_screen_center_img')) {
                $first_screen_center_img = $file->getClientOriginalName();
                $first_screen_center_imgSpaces = str_replace(' ', '_', $first_screen_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_first_screen_center_img = rand(10, 100) . $first_screen_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_first_screen_center_img);
            }

            if ($file = $request->file('first_screen_circle_img')) {
                $first_screen_circle_img = $file->getClientOriginalName();
                $first_screen_circle_imgSpaces = str_replace(' ', '_', $first_screen_circle_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_first_screen_circle_img = rand(10, 100) . $first_screen_circle_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_first_screen_circle_img);
            }
 

            if ($file = $request->file('second_screen_background_img')) {
                $second_screen_background_img = $file->getClientOriginalName();
                $second_screen_background_imgSpaces = str_replace(' ', '_', $second_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_second_screen_background_img = rand(10, 100) . $second_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_second_screen_background_img);
            }

            if ($file = $request->file('second_screen_center_img')) {
                $second_screen_center_img = $file->getClientOriginalName();
                $second_screen_center_imgSpaces = str_replace(' ', '_', $second_screen_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_second_screen_center_img = rand(10, 100) . $second_screen_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_second_screen_center_img);
            }


            if ($file = $request->file('second_screen_img')) {
                $second_screen_img = $file->getClientOriginalName();
                $second_screen_imgSpaces = str_replace(' ', '_', $second_screen_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_second_screen_img = rand(10, 100) . $second_screen_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_second_screen_img);
            }

            if ($file = $request->file('third_screen_background_img')) {
                $third_screen_background_img = $file->getClientOriginalName();
                $third_screen_background_imgSpaces = str_replace(' ', '_', $third_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_third_screen_background_img = rand(10, 100) . $third_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_third_screen_background_img);
            }

            if ($file = $request->file('third_screen_center_img')) {
                $third_screen_center_img = $file->getClientOriginalName();
                $third_screen_center_imgSpaces = str_replace(' ', '_', $third_screen_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_third_screen_center_img = rand(10, 100) . $third_screen_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_third_screen_center_img);
            }

            if ($file = $request->file('fourth_screen_background_img')) {
                $fourth_screen_background_img = $file->getClientOriginalName();
                $fourth_screen_background_imgSpaces = str_replace(' ', '_', $fourth_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_fourth_screen_background_img = rand(10, 100) . $fourth_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_fourth_screen_background_img);
            }

            if ($file = $request->file('fourth_screen_center_img')) {
                $fourth_screen_center_img = $file->getClientOriginalName();
                $fourth_screen_center_imgSpaces = str_replace(' ', '_', $fourth_screen_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_fourth_screen_center_img = rand(10, 100) . $fourth_screen_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_fourth_screen_center_img);
            }

            if ($file = $request->file('fourth_screen_img')) {
                $fourth_screen_img = $file->getClientOriginalName();
                $fourth_screen_imgSpaces = str_replace(' ', '_', $fourth_screen_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_fourth_screen_img = rand(10, 100) . $fourth_screen_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_fourth_screen_img);
            }

            if ($file = $request->file('fifth_screen_background_img')) {
                $fifth_screen_background_img = $file->getClientOriginalName();
                $fifth_screen_background_imgSpaces = str_replace(' ', '_', $fifth_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_fifth_screen_background_img = rand(10, 100) . $fifth_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_fifth_screen_background_img);
            }

            if ($file = $request->file('fifth_screen_center_img')) {
                $fifth_screen_center_img = $file->getClientOriginalName();
                $fifth_screen_center_imgSpaces = str_replace(' ', '_', $fifth_screen_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_fifth_screen_center_img = rand(10, 100) . $fifth_screen_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_fifth_screen_center_img);
            }

            if ($file = $request->file('fifth_screen_img')) {
                $fifth_screen_img = $file->getClientOriginalName();
                $fifth_screen_imgSpaces = str_replace(' ', '_', $fifth_screen_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_fifth_screen_img = rand(10, 100) . $fifth_screen_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_fifth_screen_img);
            }

            if ($file = $request->file('sixth_screen_background_img')) {
                $sixth_screen_background_img = $file->getClientOriginalName();
                $sixth_screen_background_imgSpaces = str_replace(' ', '_', $sixth_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_sixth_screen_background_img = rand(10, 100) . $sixth_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_sixth_screen_background_img);
            }

            if ($file = $request->file('sixth_screen_center_img')) {
                $sixth_screen_center_img = $file->getClientOriginalName();
                $sixth_screen_center_imgSpaces = str_replace(' ', '_', $sixth_screen_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_sixth_screen_center_img = rand(10, 100) . $sixth_screen_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_sixth_screen_center_img);
            }

            if ($file = $request->file('sixth_screen_img')) {
                $sixth_screen_img = $file->getClientOriginalName();
                $sixth_screen_imgSpaces = str_replace(' ', '_', $sixth_screen_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_sixth_screen_img = rand(10, 100) . $sixth_screen_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_sixth_screen_img);
            }

            if ($file = $request->file('seventh_screen_calling_img')) {
                $seventh_screen_calling_img = $file->getClientOriginalName();
                $seventh_screen_calling_imgSpaces = str_replace(' ', '_', $seventh_screen_calling_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_seventh_screen_calling_img = rand(10, 100) . $seventh_screen_calling_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_seventh_screen_calling_img);
            }

            if ($file = $request->file('seventh_screen_background_img')) {
                $seventh_screen_background_img = $file->getClientOriginalName();
                $seventh_screen_background_imgSpaces = str_replace(' ', '_', $seventh_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_seventh_screen_background_img = rand(10, 100) . $seventh_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_seventh_screen_background_img);
            }

            if ($file = $request->file('seventh_screen_center_img')) {
                $seventh_screen_center_img = $file->getClientOriginalName();
                $seventh_screen_center_imgSpaces = str_replace(' ', '_', $seventh_screen_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_seventh_screen_center_img = rand(10, 100) . $seventh_screen_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_seventh_screen_center_img);
            }

            if ($file = $request->file('seventh_screen_img')) {
                $seventh_screen_img = $file->getClientOriginalName();
                $seventh_screen_imgSpaces = str_replace(' ', '_', $seventh_screen_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_seventh_screen_img = rand(10, 100) . $seventh_screen_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_seventh_screen_img);
            }



            if ($file = $request->file('eight_screen_background_img')) {
                $eight_screen_background_img = $file->getClientOriginalName();
                $eight_screen_background_imgSpaces = str_replace(' ', '_', $eight_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_eight_screen_background_img = rand(10, 100) . $eight_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_eight_screen_background_img);
            }

            if ($file = $request->file('eight_screen_center_img')) {
                $eight_screen_center_img = $file->getClientOriginalName();
                $eight_screen_center_imgSpaces = str_replace(' ', '_', $eight_screen_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_eight_screen_center_img = rand(10, 100) . $eight_screen_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_eight_screen_center_img);
            }

            if ($file = $request->file('eight_screen_img')) {
                $eight_screen_img = $file->getClientOriginalName();
                $eight_screen_imgSpaces = str_replace(' ', '_', $eight_screen_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_eight_screen_img = rand(10, 100) . $eight_screen_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_eight_screen_img);
            }


            if ($file = $request->file('nine_screen_background_img')) {
                $nine_screen_background_img = $file->getClientOriginalName();
                $nine_screen_background_imgSpaces = str_replace(' ', '_', $nine_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_nine_screen_background_img = rand(10, 100) . $nine_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_nine_screen_background_img);
            }


            if ($file = $request->file('nine_screen_center_img')) {
                $nine_screen_center_img = $file->getClientOriginalName();
                $nine_screen_center_imgSpaces = str_replace(' ', '_', $nine_screen_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_nine_screen_center_img = rand(10, 100) . $nine_screen_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_nine_screen_center_img);
            }


            if ($file = $request->file('nine_screen_img')) {
                $nine_screen_img = $file->getClientOriginalName();
                $nine_screen_imgSpaces = str_replace(' ', '_', $nine_screen_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_nine_screen_img = rand(10, 100) . $nine_screen_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_nine_screen_img);
            }
            if ($file = $request->file('ten_screen_background_img')) {
                $ten_screen_background_img = $file->getClientOriginalName();
                $ten_screen_background_imgSpaces = str_replace(' ', '_', $ten_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_ten_screen_background_img = rand(10, 100) . $ten_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_ten_screen_background_img);
            }
            if ($file = $request->file('ten_screen_center_img')) {
                $ten_screen_center_img = $file->getClientOriginalName();
                $ten_screen_center_imgSpaces = str_replace(' ', '_', $ten_screen_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_ten_screen_center_img = rand(10, 100) . $ten_screen_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_ten_screen_center_img);
            }
            if ($file = $request->file('ten_screen_img')) {
                $ten_screen_img = $file->getClientOriginalName();
                $ten_screen_imgSpaces = str_replace(' ', '_', $ten_screen_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_ten_screen_img = rand(10, 100) . $ten_screen_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_ten_screen_img);
            }
            if ($file = $request->file('right_background_img')) {
                $right_background_img = $file->getClientOriginalName();
                $right_background_imgSpaces = str_replace(' ', '_', $right_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_right_background_img = rand(10, 100) . $right_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_right_background_img);
            }
            if ($file = $request->file('wrong_background_img')) {
                $wrong_background_img = $file->getClientOriginalName();
                $wrong_background_imgSpaces = str_replace(' ', '_', $wrong_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_wrong_background_img = rand(10, 100) . $wrong_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_wrong_background_img);
            }

            $values = [
                'first_screen_title' => $request->first_screen_title,
                'first_screen_background_img' => $random_first_screen_background_img,
                'first_screen_center_img' => $random_first_screen_center_img,
                'first_screen_circle_img' => $random_first_screen_circle_img,
                'first_screen_button_text' => $request->first_screen_button_text,
                'second_screen_text' => $request->second_screen_text,
                'second_screen_background_img' => $random_second_screen_background_img,
                'second_screen_center_img' => $random_second_screen_center_img,
                'second_screen_img' => $random_second_screen_img,
                'second_screen_button_text' => $request->second_screen_button_text,
                'third_screen_background_img' => $random_third_screen_background_img,
                'third_screen_center_img' => $random_third_screen_center_img,
                'third_screen_button_text' => $request->third_screen_button_text,
                'third_screen_text' => $request->third_screen_text,
                'fourth_screen_background_img' => $random_fourth_screen_background_img,
                'fourth_screen_center_img' => $random_fourth_screen_center_img,
                'fourth_screen_img' => $random_fourth_screen_img,
                'fourth_screen_button_text' => $request->fourth_screen_button_text,
                'fourth_screen_text' => $request->fourth_screen_text,
                'fourth_screen_button_text' => $request->fourth_screen_button_text,
                'fifth_screen_background_img' => $random_fifth_screen_background_img,
                'fifth_screen_center_img' => $random_fifth_screen_center_img,
                'fifth_screen_text' => $request->fifth_screen_text,
                'fifth_screen_img' => $random_fifth_screen_img,
                'fifth_screen_button_text' => $request->fifth_screen_button_text,
                'sixth_screen_background_img' => $random_sixth_screen_background_img,
                'sixth_screen_center_img' => $random_sixth_screen_center_img,
                'sixth_screen_img' => $random_sixth_screen_img,
                'sixth_screen_text' => $request->sixth_screen_text,
                'sixth_screen_button_text' => $request->sixth_screen_button_text,
                'seventh_screen_background_img' => $random_seventh_screen_background_img,
                'seventh_screen_center_img' => $random_seventh_screen_center_img,
                'seventh_screen_img' => $random_seventh_screen_img,
                'seventh_screen_calling_img' => $random_seventh_screen_calling_img,
                'seventh_screen_text' => $request->seventh_screen_text,
                'seventh_screen_button_text' => $request->seventh_screen_button_text,
                'eight_screen_background_img' => $random_eight_screen_background_img,
                'eight_screen_center_img' => $random_eight_screen_center_img,
                'eight_screen_img' => $random_eight_screen_img,
                'eight_screen_button_text' => $request->eight_screen_button_text,
                'eight_screen_text' => $request->eight_screen_text,
                'nine_screen_background_img' => $random_nine_screen_background_img,
                'nine_screen_center_img' => $random_nine_screen_center_img,
                'nine_screen_img' => $random_nine_screen_img,
                'nine_screen_button_text' => $request->nine_screen_button_text,
                'nine_screen_text' => $request->nine_screen_text,
                'ten_screen_text' => $request->ten_screen_text,
                'ten_screen_background_img' => $random_ten_screen_background_img,
                'ten_screen_center_img' => $random_ten_screen_center_img,
                'right_background_img' => $random_right_background_img,
                'wrong_background_img' => $random_wrong_background_img                
            ];

            DB::table('coral_empire')->insert($values);
            DB::commit();
            return redirect()->route('view_games_info');
    }

     public function savecosmicEmpireQuetions(Request $request)
    {
          if($quetion_image = $request->file('quetion_image')) {
                    $quetion_image_name = $quetion_image->getClientOriginalName();
                    $quetion_imageWithoutSpaces = str_replace(' ', '_', $quetion_image_name); // Replace spaces with underscores
                    $random_name = rand(10,100).$quetion_imageWithoutSpaces;
                    // $file->move('public/image',$name);
                    $quetion_image->move(public_path() . '/uploads/', $random_name);
          }

          if($mcq_images = $request->file('mcq_images')) {
                    $mcq_images_name = $mcq_images->getClientOriginalName();
                    $mcq_imagesWithoutSpaces = str_replace(' ', '_', $mcq_images_name); // Replace spaces with underscores
                    $random_name1 = rand(10,100).$mcq_imagesWithoutSpaces;
                    // $file->move('public/image',$name);
                    $mcq_images->move(public_path() . '/uploads/', $random_name1);
          }

          $values = [
                'question' => $request->question,
                'question_sub_text' => $request->question_sub_text,
                'answer' => $request->answer,
                'quetion_image' => (empty($random_name)) ? Null : $random_name,
                'right_answer_fact' => $request->right_answer_fact,
                'wrong_answer_fact' => $request->wrong_answer_fact,
                'macq_option' => $request->macq_option,
                'mcq_images' => (empty($random_name1)) ? Null : $random_name1,
            ];
           DB::table('coral_empire_quetions')->insertGetId($values);
           DB::commit();
        // DB::beginTransaction();
        // try {


        //    } catch (\Exception $e) {
        //     DB::rollback();
        //     //Toastr::error('fail, User Update :)', 'Error');
        //     return redirect()->back();
        // }
    }


    public function updateReconnectWorld(Request $request)
    {
            if ($file = $request->file('background_img')) {
                $background_img = $file->getClientOriginalName();
                $background_imgSpaces = str_replace(' ', '_', $background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_background_img = rand(10, 100) . $background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_background_img);

                $values = [
                    'background_img' => $random_background_img,
                ];
                DB::table('reconnect_world')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('first_screen_circle_img')) {
                $first_screen_circle_img = $file->getClientOriginalName();
                $first_screen_circle_imgSpaces = str_replace(' ', '_', $first_screen_circle_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_first_screen_circle_img = rand(10, 100) . $first_screen_circle_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_first_screen_circle_img);
                $values = [
                    'first_screen_circle_img' => $random_first_screen_circle_img,
                ];
                DB::table('reconnect_world')->where('id', '1')->update($values);
                DB::commit();
            }
 

            if ($file = $request->file('second_screen_bakground_img')) {
                $second_screen_bakground_img = $file->getClientOriginalName();
                $second_screen_bakground_imgSpaces = str_replace(' ', '_', $second_screen_bakground_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_second_screen_bakground_img = rand(10, 100) . $second_screen_bakground_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_second_screen_bakground_img);
                $values = [
                    'second_screen_bakground_img' => $random_second_screen_bakground_img,
                ];
                DB::table('reconnect_world')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('third_screen_main_background_img')) {
                $third_screen_main_background_img = $file->getClientOriginalName();
                $third_screen_main_background_imgSpaces = str_replace(' ', '_', $third_screen_main_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_third_screen_main_background_img = rand(10, 100) . $third_screen_main_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_third_screen_main_background_img);
                $values = [
                    'third_screen_main_background_img' => $random_third_screen_main_background_img,
                ];
                DB::table('reconnect_world')->where('id', '1')->update($values);
                DB::commit();
            }


            if ($file = $request->file('second_screen_bakground_center_img')) {
                $second_screen_center_img = $file->getClientOriginalName();
                $second_screen_center_imgSpaces = str_replace(' ', '_', $second_screen_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_second_screen_center_img = rand(10, 100) . $second_screen_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_second_screen_center_img);
                $values = [
                    'second_screen_bakground_center_img' => $random_second_screen_center_img,
                ];
                DB::table('reconnect_world')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('third_background_img')) {
                $third_background_img = $file->getClientOriginalName();
                $third_background_imgSpaces = str_replace(' ', '_', $third_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_third_background_img = rand(10, 100) . $third_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_third_background_img);
                $values = [
                    'third_background_img' => $random_third_background_img,
                ];
                DB::table('reconnect_world')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('third_screen_bakground_center_img')) {
                $third_screen_bakground_center_img = $file->getClientOriginalName();
                $third_screen_bakground_center_imgSpaces = str_replace(' ', '_', $third_screen_bakground_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_third_screen_bakground_center_img = rand(10, 100) . $third_screen_bakground_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_third_screen_bakground_center_img);
                $values = [
                    'third_screen_bakground_center_img' => $random_third_screen_bakground_center_img,
                ];
                DB::table('reconnect_world')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('fourth_screen_background_img')) {
                $fourth_screen_background_img = $file->getClientOriginalName();
                $fourth_screen_background_imgSpaces = str_replace(' ', '_', $fourth_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_fourth_screen_background_img = rand(10, 100) . $fourth_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_fourth_screen_background_img);
                $values = [
                    'fourth_screen_background_img' => $random_fourth_screen_background_img,
                ];
                DB::table('reconnect_world')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('fourth_screen_center_img')) {
                $fourth_screen_center_img = $file->getClientOriginalName();
                $fourth_screen_center_imgSpaces = str_replace(' ', '_', $fourth_screen_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_fourth_screen_center_img = rand(10, 100) . $fourth_screen_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_fourth_screen_center_img);
                $values = [
                    'fourth_screen_center_img' => $random_fourth_screen_center_img,
                ];
                DB::table('reconnect_world')->where('id', '1')->update($values);
                DB::commit();
            }

            // if ($file = $request->file('fourth_screen_img')) {
            //     $fourth_screen_img = $file->getClientOriginalName();
            //     $fourth_screen_imgSpaces = str_replace(' ', '_', $fourth_screen_img); // Replace spaces with underscores
            //     // $file->move('public/image',$name);
            //     $random_fourth_screen_img = rand(10, 100) . $fourth_screen_imgSpaces;
            //     $file->move(public_path() . '/uploads/', $random_fourth_screen_img);
            //     $values = [
            //         'fourth_screen_img' => $random_fourth_screen_img,
            //     ];
            //     DB::table('reconnect_world')->where('id', '1')->update($values);
            //     DB::commit();
            // }
            if ($files = $request->file('fourth_screen_img')) {
                $imageIndexes = $request->input('image_indexes');
            
                foreach ($files as $index => $file) {
                    if (in_array($index, $imageIndexes)) {
                        $name = $file->getClientOriginalName();
                        $nameSpaces = str_replace(' ', '_', $name);
                        $random_fourth_screen_img = rand(10, 100) . $nameSpaces;
                        $file->move(public_path() . '/uploads/', $random_fourth_screen_img);
            
                        // Update the specific image based on the index
                        $data = DB::table('reconnect_world')->where('id', $request->id)->first();
                        $mcqImages = explode(',', $data->fourth_screen_img);
                        $mcqImages[$index] = $random_fourth_screen_img;
                        $updatedMcqImages = implode(',', $mcqImages);
            
                        DB::table('reconnect_world')
                            ->where('id', $request->id)
                            ->update(['fourth_screen_img' => $updatedMcqImages]);
                    }
                }
            
                DB::commit();
            }
            if ($file = $request->file('fifth_screen_background_img')) {
                $fifth_screen_background_img = $file->getClientOriginalName();
                $fifth_screen_background_imgSpaces = str_replace(' ', '_', $fifth_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_fifth_screen_background_img = rand(10, 100) . $fifth_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_fifth_screen_background_img);
                $values = [
                    'fifth_screen_background_img' => $random_fifth_screen_background_img,
                ];
                DB::table('reconnect_world')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('fifth_screen_background_centerimg')) {
                $fifth_screen_background_centerimg = $file->getClientOriginalName();
                $fifth_screen_background_centerimgSpaces = str_replace(' ', '_', $fifth_screen_background_centerimg); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_fifth_screen_background_centerimg = rand(10, 100) . $fifth_screen_background_centerimgSpaces;
                $file->move(public_path() . '/uploads/', $random_fifth_screen_background_centerimg);
                $values = [
                    'fifth_screen_background_centerimg' => $random_fifth_screen_background_centerimg,
                ];
                DB::table('reconnect_world')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('fifth_screen_img')) {
                $fifth_screen_img = $file->getClientOriginalName();
                $fifth_screen_imgSpaces = str_replace(' ', '_', $fifth_screen_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_fifth_screen_img = rand(10, 100) . $fifth_screen_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_fifth_screen_img);
                $values = [
                    'fifth_screen_img' => $random_fifth_screen_img,
                ];
                DB::table('reconnect_world')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('sixth_screen_background_img')) {
                $sixth_screen_background_img = $file->getClientOriginalName();
                $sixth_screen_background_imgSpaces = str_replace(' ', '_', $sixth_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_sixth_screen_background_img = rand(10, 100) . $sixth_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_sixth_screen_background_img);
                $values = [
                    'sixth_screen_background_img' => $random_sixth_screen_background_img,
                ];
                DB::table('reconnect_world')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('sixth_screen_background_center_img')) {
                $sixth_screen_background_center_img = $file->getClientOriginalName();
                $sixth_screen_background_center_imgSpaces = str_replace(' ', '_', $sixth_screen_background_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_sixth_screen_background_center_img = rand(10, 100) . $sixth_screen_background_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_sixth_screen_background_center_img);
                $values = [
                    'sixth_screen_background_center_img' => $random_sixth_screen_background_center_img,
                ];
                DB::table('reconnect_world')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('sixth_screen_img')) {
                $sixth_screen_img = $file->getClientOriginalName();
                $sixth_screen_imgSpaces = str_replace(' ', '_', $sixth_screen_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_sixth_screen_img = rand(10, 100) . $sixth_screen_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_sixth_screen_img);
                $values = [
                    'sixth_screen_img' => $random_sixth_screen_img,
                ];
                DB::table('reconnect_world')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('sevanth_screen_background_img')) {
                $sevanth_screen_background_img = $file->getClientOriginalName();
                $sevanth_screen_background_imgSpaces = str_replace(' ', '_', $sevanth_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_sevanth_screen_background_img = rand(10, 100) . $sevanth_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_sevanth_screen_background_img);
                $values = [
                    'sevanth_screen_background_img' => $random_sevanth_screen_background_img,
                ];
                DB::table('reconnect_world')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('sevanth_screen_background_center_img')) {
                $sevanth_screen_background_center_img = $file->getClientOriginalName();
                $sevanth_screen_background_center_imgSpaces = str_replace(' ', '_', $sevanth_screen_background_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_sevanth_screen_background_center_img = rand(10, 100) . $sevanth_screen_background_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_sevanth_screen_background_center_img);
                $values = [
                    'sevanth_screen_background_center_img' => $random_sevanth_screen_background_center_img,
                ];
                DB::table('reconnect_world')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('sevanth_screen_img')) {
                $sevanth_screen_img = $file->getClientOriginalName();
                $sevanth_screen_imgSpaces = str_replace(' ', '_', $sevanth_screen_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_sevanth_screen_img = rand(10, 100) . $sevanth_screen_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_sevanth_screen_img);
                $values = [
                    'sevanth_screen_img' => $random_sevanth_screen_img,
                ];
                DB::table('reconnect_world')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('final_screen_background_img')) {
                $final_screen_background_img = $file->getClientOriginalName();
                $final_screen_background_imgSpaces = str_replace(' ', '_', $final_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_final_screen_background_img = rand(10, 100) . $final_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_final_screen_background_img);
                $values = [
                    'final_screen_background_img' => $random_final_screen_background_img,
                ];
                DB::table('reconnect_world')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('final_screen_img')) {
                $final_screen_img = $file->getClientOriginalName();
                $final_screen_imgSpaces = str_replace(' ', '_', $final_screen_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_final_screen_img = rand(10, 100) . $final_screen_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_final_screen_img);
                $values = [
                    'final_screen_img' => $random_final_screen_img,
                ];
                DB::table('reconnect_world')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('answer_background_img')) {
                $answer_background_img = $file->getClientOriginalName();
                $answer_background_imgSpaces = str_replace(' ', '_', $answer_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_answer_background_img = rand(10, 100) . $answer_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_answer_background_img);
                $values = [
                    'answer_background_img' => $random_answer_background_img,
                ];
                DB::table('reconnect_world')->where('id', '1')->update($values);
                DB::commit();
            }

            $values1 = [
                'ticker_time' => $request->ticker_time,
                'first_screen_title' => $request->first_screen_title,
                'description_first' => $request->description_first,
                'description_second' => $request->description_second,
                'button_text' => $request->button_text,
                'bottom_line_text' => $request->bottom_line_text,
                'second_screen_title' => $request->second_screen_title,
                'second_screen_text' => $request->second_screen_text,
                'second_screen_password' => $request->second_screen_password,
                'second_screen_bottom_line_text' => $request->second_screen_bottom_line_text,
                'second_screen_button_text' => $request->second_screen_button_text,
                'fourth_screen_button' => $request->fourth_screen_button,
                'fourth_screen_text' => $request->fourth_screen_text,
                'fifth_screen_text' => $request->fifth_screen_text,
                'fifth_screen_button_text' => $request->fifth_screen_button_text,
                'sixth_text' => $request->sixth_text,
                'sevanth_text' => $request->sevanth_text,
                'sevanth_screen_option' => $request->sevanth_screen_option,
                'final_screen_title' => $request->final_screen_title,
                'final_screen_bottom_text' => $request->final_screen_bottom_text
            ];

            DB::table('reconnect_world')->where('id', '1')->update($values1);
            DB::commit();
            return redirect()->route('view_games_info');
    }

     public function updateCoralEmpire(Request $request)
    {
            if ($file = $request->file('first_screen_background_img')) {
                $first_screen_background_img = $file->getClientOriginalName();
                $first_screen_background_imgSpaces = str_replace(' ', '_', $first_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_first_screen_background_img = rand(10, 100) . $first_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_first_screen_background_img);

                $values = [
                    'first_screen_background_img' => $random_first_screen_background_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }

             if ($file = $request->file('first_screen_center_img')) {
                $first_screen_center_img = $file->getClientOriginalName();
                $first_screen_center_imgSpaces = str_replace(' ', '_', $first_screen_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_first_screen_center_img = rand(10, 100) . $first_screen_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_first_screen_center_img);
                $values = [
                    'first_screen_center_img' => $random_first_screen_center_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('first_screen_circle_img')) {
                $first_screen_circle_img = $file->getClientOriginalName();
                $first_screen_circle_imgSpaces = str_replace(' ', '_', $first_screen_circle_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_first_screen_circle_img = rand(10, 100) . $first_screen_circle_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_first_screen_circle_img);
                $values = [
                    'first_screen_circle_img' => $random_first_screen_circle_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }
 

            if ($file = $request->file('second_screen_background_img')) {
                $second_screen_background_img = $file->getClientOriginalName();
                $second_screen_background_imgSpaces = str_replace(' ', '_', $second_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_second_screen_background_img = rand(10, 100) . $second_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_second_screen_background_img);
                $values = [
                    'second_screen_background_img' => $random_second_screen_background_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('second_screen_center_img')) {
                $second_screen_center_img = $file->getClientOriginalName();
                $second_screen_center_imgSpaces = str_replace(' ', '_', $second_screen_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_second_screen_center_img = rand(10, 100) . $second_screen_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_second_screen_center_img);
                $values = [
                    'second_screen_center_img' => $random_second_screen_center_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }


            if ($file = $request->file('second_screen_img')) {
                $second_screen_img = $file->getClientOriginalName();
                $second_screen_imgSpaces = str_replace(' ', '_', $second_screen_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_second_screen_img = rand(10, 100) . $second_screen_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_second_screen_img);
                $values = [
                    'second_screen_img' => $random_second_screen_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('third_screen_background_img')) {
                $third_screen_background_img = $file->getClientOriginalName();
                $third_screen_background_imgSpaces = str_replace(' ', '_', $third_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_third_screen_background_img = rand(10, 100) . $third_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_third_screen_background_img);
                $values = [
                    'third_screen_background_img' => $random_third_screen_background_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('third_screen_center_img')) {
                $third_screen_center_img = $file->getClientOriginalName();
                $third_screen_center_imgSpaces = str_replace(' ', '_', $third_screen_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_third_screen_center_img = rand(10, 100) . $third_screen_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_third_screen_center_img);
                $values = [
                    'third_screen_center_img' => $random_third_screen_center_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('fourth_screen_background_img')) {
                $fourth_screen_background_img = $file->getClientOriginalName();
                $fourth_screen_background_imgSpaces = str_replace(' ', '_', $fourth_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_fourth_screen_background_img = rand(10, 100) . $fourth_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_fourth_screen_background_img);
                $values = [
                    'fourth_screen_background_img' => $random_fourth_screen_background_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('fourth_screen_center_img')) {
                $fourth_screen_center_img = $file->getClientOriginalName();
                $fourth_screen_center_imgSpaces = str_replace(' ', '_', $fourth_screen_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_fourth_screen_center_img = rand(10, 100) . $fourth_screen_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_fourth_screen_center_img);
                $values = [
                    'fourth_screen_center_img' => $random_fourth_screen_center_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('fourth_screen_img')) {
                $fourth_screen_img = $file->getClientOriginalName();
                $fourth_screen_imgSpaces = str_replace(' ', '_', $fourth_screen_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_fourth_screen_img = rand(10, 100) . $fourth_screen_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_fourth_screen_img);
                $values = [
                    'fourth_screen_img' => $random_fourth_screen_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('fifth_screen_background_img')) {
                $fifth_screen_background_img = $file->getClientOriginalName();
                $fifth_screen_background_imgSpaces = str_replace(' ', '_', $fifth_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_fifth_screen_background_img = rand(10, 100) . $fifth_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_fifth_screen_background_img);
                $values = [
                    'fifth_screen_background_img' => $random_fifth_screen_background_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('fifth_screen_center_img')) {
                $fifth_screen_center_img = $file->getClientOriginalName();
                $fifth_screen_center_imgSpaces = str_replace(' ', '_', $fifth_screen_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_fifth_screen_center_img = rand(10, 100) . $fifth_screen_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_fifth_screen_center_img);
                $values = [
                    'fifth_screen_center_img' => $random_fifth_screen_center_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('fifth_screen_img')) {
                $fifth_screen_img = $file->getClientOriginalName();
                $fifth_screen_imgSpaces = str_replace(' ', '_', $fifth_screen_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_fifth_screen_img = rand(10, 100) . $fifth_screen_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_fifth_screen_img);
                $values = [
                    'fifth_screen_img' => $random_fifth_screen_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('sixth_screen_background_img')) {
                $sixth_screen_background_img = $file->getClientOriginalName();
                $sixth_screen_background_imgSpaces = str_replace(' ', '_', $sixth_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_sixth_screen_background_img = rand(10, 100) . $sixth_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_sixth_screen_background_img);
                $values = [
                    'sixth_screen_background_img' => $random_sixth_screen_background_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('sixth_screen_center_img')) {
                $sixth_screen_center_img = $file->getClientOriginalName();
                $sixth_screen_center_imgSpaces = str_replace(' ', '_', $sixth_screen_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_sixth_screen_center_img = rand(10, 100) . $sixth_screen_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_sixth_screen_center_img);
                $values = [
                    'sixth_screen_center_img' => $random_sixth_screen_center_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('sixth_screen_img')) {
                $sixth_screen_img = $file->getClientOriginalName();
                $sixth_screen_imgSpaces = str_replace(' ', '_', $sixth_screen_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_sixth_screen_img = rand(10, 100) . $sixth_screen_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_sixth_screen_img);
                $values = [
                    'sixth_screen_img' => $random_sixth_screen_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('seventh_screen_calling_img')) {
                $seventh_screen_calling_img = $file->getClientOriginalName();
                $seventh_screen_calling_imgSpaces = str_replace(' ', '_', $seventh_screen_calling_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_seventh_screen_calling_img = rand(10, 100) . $seventh_screen_calling_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_seventh_screen_calling_img);
                $values = [
                    'seventh_screen_calling_img' => $random_seventh_screen_calling_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('seventh_screen_background_img')) {
                $seventh_screen_background_img = $file->getClientOriginalName();
                $seventh_screen_background_imgSpaces = str_replace(' ', '_', $seventh_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_seventh_screen_background_img = rand(10, 100) . $seventh_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_seventh_screen_background_img);
                $values = [
                    'seventh_screen_background_img' => $random_seventh_screen_background_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('seventh_screen_center_img')) {
                $seventh_screen_center_img = $file->getClientOriginalName();
                $seventh_screen_center_imgSpaces = str_replace(' ', '_', $seventh_screen_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_seventh_screen_center_img = rand(10, 100) . $seventh_screen_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_seventh_screen_center_img);
                $values = [
                    'seventh_screen_center_img' => $random_seventh_screen_center_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('seventh_screen_img')) {
                $seventh_screen_img = $file->getClientOriginalName();
                $seventh_screen_imgSpaces = str_replace(' ', '_', $seventh_screen_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_seventh_screen_img = rand(10, 100) . $seventh_screen_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_seventh_screen_img);
                $values = [
                    'seventh_screen_img' => $random_seventh_screen_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }



            if ($file = $request->file('eight_screen_background_img')) {
                $eight_screen_background_img = $file->getClientOriginalName();
                $eight_screen_background_imgSpaces = str_replace(' ', '_', $eight_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_eight_screen_background_img = rand(10, 100) . $eight_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_eight_screen_background_img);
                $values = [
                    'eight_screen_background_img' => $random_eight_screen_background_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('eight_screen_center_img')) {
                $eight_screen_center_img = $file->getClientOriginalName();
                $eight_screen_center_imgSpaces = str_replace(' ', '_', $eight_screen_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_eight_screen_center_img = rand(10, 100) . $eight_screen_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_eight_screen_center_img);
                $values = [
                    'eight_screen_center_img' => $random_eight_screen_center_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }

            if ($file = $request->file('eight_screen_img')) {
                $eight_screen_img = $file->getClientOriginalName();
                $eight_screen_imgSpaces = str_replace(' ', '_', $eight_screen_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_eight_screen_img = rand(10, 100) . $eight_screen_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_eight_screen_img);
                $values = [
                    'eight_screen_img' => $random_eight_screen_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }


            if ($file = $request->file('nine_screen_background_img')) {
                $nine_screen_background_img = $file->getClientOriginalName();
                $nine_screen_background_imgSpaces = str_replace(' ', '_', $nine_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_nine_screen_background_img = rand(10, 100) . $nine_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_nine_screen_background_img);
                $values = [
                    'nine_screen_background_img' => $random_nine_screen_background_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }


            if ($file = $request->file('nine_screen_center_img')) {
                $nine_screen_center_img = $file->getClientOriginalName();
                $nine_screen_center_imgSpaces = str_replace(' ', '_', $nine_screen_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_nine_screen_center_img = rand(10, 100) . $nine_screen_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_nine_screen_center_img);
                $values = [
                    'nine_screen_center_img' => $random_nine_screen_center_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }


            if ($file = $request->file('nine_screen_img')) {
                $nine_screen_img = $file->getClientOriginalName();
                $nine_screen_imgSpaces = str_replace(' ', '_', $nine_screen_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_nine_screen_img = rand(10, 100) . $nine_screen_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_nine_screen_img);
                $values = [
                    'nine_screen_img' => $random_nine_screen_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }
            if ($file = $request->file('ten_screen_background_img')) {
                $ten_screen_background_img = $file->getClientOriginalName();
                $ten_screen_background_imgSpaces = str_replace(' ', '_', $ten_screen_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_ten_screen_background_img = rand(10, 100) . $ten_screen_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_ten_screen_background_img);
                $values = [
                    'ten_screen_background_img' => $random_ten_screen_background_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }
            if ($file = $request->file('ten_screen_center_img')) {
                $ten_screen_center_img = $file->getClientOriginalName();
                $ten_screen_center_imgSpaces = str_replace(' ', '_', $ten_screen_center_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_ten_screen_center_img = rand(10, 100) . $ten_screen_center_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_ten_screen_center_img);
                $values = [
                    'ten_screen_center_img' => $random_ten_screen_center_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }
            if ($file = $request->file('ten_screen_img')) {
                $ten_screen_img = $file->getClientOriginalName();
                $ten_screen_imgSpaces = str_replace(' ', '_', $ten_screen_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_ten_screen_img = rand(10, 100) . $ten_screen_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_ten_screen_img);
                $values = [
                    'ten_screen_img' => $random_ten_screen_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }
            if ($file = $request->file('right_background_img')) {
                $right_background_img = $file->getClientOriginalName();
                $right_background_imgSpaces = str_replace(' ', '_', $right_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_right_background_img = rand(10, 100) . $right_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_right_background_img);
                $values = [
                    'right_background_img' => $random_right_background_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }
            if ($file = $request->file('wrong_background_img')) {
                $wrong_background_img = $file->getClientOriginalName();
                $wrong_background_imgSpaces = str_replace(' ', '_', $wrong_background_img); // Replace spaces with underscores
                // $file->move('public/image',$name);
                $random_wrong_background_img = rand(10, 100) . $wrong_background_imgSpaces;
                $file->move(public_path() . '/uploads/', $random_wrong_background_img);
                $values = [
                    'wrong_background_img' => $random_wrong_background_img,
                ];
                DB::table('coral_empire')->where('id', '1')->update($values);
                DB::commit();
            }

            $values1 = [
                'ticker_time' => $request->ticker_time,
                'first_screen_title' => $request->first_screen_title,
                'first_screen_button_text' => $request->first_screen_button_text,
                'second_screen_text' => $request->second_screen_text,
                'second_screen_button_text' => $request->second_screen_button_text,
                'third_screen_button_text' => $request->third_screen_button_text,
                'third_screen_text' => $request->third_screen_text,
                'fourth_screen_button_text' => $request->fourth_screen_button_text,
                'fourth_screen_text' => $request->fourth_screen_text,
                'fourth_screen_sub_text' => $request->fourth_screen_sub_text,
                'fourth_screen_button_text' => $request->fourth_screen_button_text,
                'fifth_screen_text' => $request->fifth_screen_text,
                'fifth_screen_button_text' => $request->fifth_screen_button_text,
                'sixth_screen_text' => $request->sixth_screen_text,
                'sixth_screen_sub_text' => $request->sixth_screen_sub_text,
                'sixth_screen_button_text' => $request->sixth_screen_button_text,
                'seventh_screen_text' => $request->seventh_screen_text,
                'seventh_screen_button_text' => $request->seventh_screen_button_text,
                'eight_screen_button_text' => $request->eight_screen_button_text,
                'eight_screen_text' => $request->eight_screen_text,
                'nine_screen_button_text' => $request->nine_screen_button_text,
                'nine_screen_text' => $request->nine_screen_text,
                'ten_screen_text' => $request->ten_screen_text,
                'ten_screen_sub_text' => $request->ten_screen_sub_text
            ];

            DB::table('coral_empire')->where('id', '1')->update($values1);
            DB::commit();
            return redirect()->route('view_games_info');
    }

    public function edit_all_games($id)
    {
    if ($id == 1) {
       $data_img = DB::table('game1')->select('*')->distinct()->get()->toArray();
        return view('admin.rescue_champs.edit_game', ['data_img' => $data_img]);
    } elseif ($id == 2) {
        $data = DB::table('reconnect_world')->select('*')->get()->toArray();
        return view("admin.reconnect_world.reconnect_world_edit", ["data" => $data]);
    } elseif ($id == 3) {
        $data = DB::table('coral_empire')->select('*')->get()->toArray();
        return view("admin.coral_empire.coral_empire_edit", ["data" => $data]);
    } elseif ($id == 4) {
        $data_img = DB::table('cosmic_cleanup')->select('*')->distinct()->get()->toArray();
         return view('admin.cosmic_cleanup.editgame', array('data_img' => $data_img));
    }

    // Handle other cases or return an error view if needed
    }


    public function view_games_info()
    {

    DB::beginTransaction();
    try {
        $data = DB::table('game_info')->select('*')->distinct()->get()->toArray();

        return view("admin.gameDetails.view_all_games", ["data" => $data]);
    } catch (\Exception $e) {
        return redirect()->back();
    }
    // $user_table = User::all();
    // return view ('usermanagement.usertable',compact('user_table'));
    }

    public function view_game_data()
    {

        DB::beginTransaction();
        try {
            $data = DB::table('game_info')->select('*')->distinct()->get()->toArray();
        
            return view("admin.gameDetails.view_games_data", ["data" => $data]);
        } catch (\Exception $e) {
        return redirect()->back();
    }
    // $user_table = User::all();
    // return view ('usermanagement.usertable',compact('user_table'));
    }

    public function view_game_slots()
    {

        DB::beginTransaction();
        try {
            $data = DB::table('game_slots')->select('*')->distinct()->get()->toArray();
        
            return view("admin.gameDetails.view_games_slots", ["data" => $data]);
        } catch (\Exception $e) {
        return redirect()->back();
    }
    // $user_table = User::all();
    // return view ('usermanagement.usertable',compact('user_table'));
    }

    public function view_cosmic_quetions()
    {

    DB::beginTransaction();
    try {
        $data = DB::table('coral_empire_quetions')->select('*')->distinct()->get()->toArray();

        return view("admin.coral_empire.view_quetions", ["data" => $data]);
    } catch (\Exception $e) {
        return redirect()->back();
    }
    // $user_table = User::all();
    // return view ('usermanagement.usertable',compact('user_table'));
    }
   


    public function view_reconnect_quetions()
    {

    DB::beginTransaction();
    try {

        $data = DB::table('reconnect_quetions')->select('*')->distinct()->get()->toArray();
        return view("admin.reconnect_world.view_reconnect_quetions", ["data" => $data]);
    } catch (\Exception $e) {
        return redirect()->back();
    }
    // $user_table = User::all();
    // return view ('usermanagement.usertable',compact('user_table'));
    }

    public function view_rescue_quetions()
    {

    DB::beginTransaction();
    try {

        $data = DB::table('questions')->select('*')->distinct()->get()->toArray();
        return view("admin.rescue_champs.view_rescue_quetions", ["data" => $data]);
    } catch (\Exception $e) {
        return redirect()->back();
    }
    
    }

    public function view_rescue_hindi_quetions()
    {

        DB::beginTransaction();
        try {

            $data = DB::table('questions_hindi')->select('*')->distinct()->get()->toArray();
            return view("admin.rescue_champs.view_rescue_hindi_quetions", ["data" => $data]);
        } catch (\Exception $e) {
            return redirect()->back();
        }
  
    }


    public function updateCosmicEmpireQuetions(Request $request)
    {

        DB::beginTransaction();
        try {

          $id = $request->id;
          if($quetion_background_img = $request->file('quetion_background_img')) {
                    $quetion_background_img_name = $quetion_background_img->getClientOriginalName();
                    $quetion_background_imgWithoutSpaces = str_replace(' ', '_', $quetion_background_img_name); // Replace spaces with underscores
                    $random_quetion_background_img_name = rand(10,100).$quetion_background_imgWithoutSpaces;
                    // $file->move('public/image',$name);
                    $quetion_background_img->move(public_path() . '/uploads/', $random_quetion_background_img_name);
                    $values = [
                    'quetion_background_img' => $random_quetion_background_img_name,
                     ];
                    DB::table('coral_empire_quetions')->where('id', $id)->update($values);
                    DB::commit();
          }

         if($quetion_image = $request->file('quetion_image')) {
                    $quetion_image_name = $quetion_image->getClientOriginalName();
                    $quetion_imageWithoutSpaces = str_replace(' ', '_', $quetion_image_name); // Replace spaces with underscores
                    $random_name = rand(10,100).$quetion_imageWithoutSpaces;
                    // $file->move('public/image',$name);
                    $quetion_image->move(public_path() . '/uploads/', $random_name);
                    $values = [
                    'quetion_image' => $random_name,
                     ];
                    DB::table('coral_empire_quetions')->where('id', $id)->update($values);
                    DB::commit();
          }

        //   if($mcq_images = $request->file('mcq_images')) {
        //             $mcq_images_name = $mcq_images->getClientOriginalName();
        //             $mcq_imagesWithoutSpaces = str_replace(' ', '_', $mcq_images_name); // Replace spaces with underscores
        //             $random_name1 = rand(10,100).$mcq_imagesWithoutSpaces;
        //             // $file->move('public/image',$name);
        //             $mcq_images->move(public_path() . '/uploads/', $random_name1);
        //             // $values = [
        //             // 'quetion_image' => $random_name,
        //             //  ];
        //             // DB::table('coral_empire_quetions')->where('id', '1')->update($values);
        //             // DB::commit();
        //   }

        if ($files = $request->file('mcq_images')) {
            $imageIndexes = $request->input('image_indexes');
        
            foreach ($files as $index => $file) {
                if (in_array($index, $imageIndexes)) {
                    $name = $file->getClientOriginalName();
                    $nameSpaces = str_replace(' ', '_', $name);
                    $random_name1 = rand(10,100).$nameSpaces;
                    $file->move(public_path() . '/uploads/', $random_name1);
        
                    // Update the specific image based on the index
                    $data = DB::table('coral_empire_quetions')->where('id', $request->id)->first();
                    $mcqImages = explode(',', $data->mcq_images);
                    $mcqImages[$index] = $random_name1;
                    $updatedMcqImages = implode(',', $mcqImages);
        
                    DB::table('coral_empire_quetions')
                        ->where('id', $request->id)
                        ->update(['mcq_images' => $updatedMcqImages]);
                }
            }
        
            DB::commit();
        }



          $values1 = [
                'question' => $request->question,
                'question_sub_text' => $request->question_sub_text,
                'quetion_button_text' => $request->quetion_button_text,
                'answer' => $request->answer,
                //'quetion_image' => (empty($random_name)) ? Null : $random_name,
                'right_fact' => $request->right_answer_fact,
                'wrong_fact' => $request->wrong_answer_fact,
                'right_text' => $request->right_text,
                'wrong_text' => $request->wrong_text,
                'macq_option' => $request->macq_option,
                //'mcq_images' => (empty($random_name1)) ? Null : $random_name1,
            ];
           DB::table('coral_empire_quetions')->where('id', $id)->update($values1);
           DB::commit();
           return redirect()->route('view_cosmic_quetions');
           } catch (\Exception $e) {
            DB::rollback();
            //Toastr::error('fail, User Update :)', 'Error');
            return redirect()->back();
        }
    }

    public function updateReconnectQuetions(Request $request)
    {

        DB::beginTransaction();
        try {
            $id = $request->id;
          if($background_img = $request->file('background_img')) {
                    $background_img_name = $background_img->getClientOriginalName();
                    $background_imgWithoutSpaces = str_replace(' ', '_', $background_img_name); // Replace spaces with underscores
                    $random_name = rand(10,100).$background_imgWithoutSpaces;
                    // $file->move('public/image',$name);
                    $background_img->move(public_path() . '/uploads/', $random_name);
                    $values = [
                    'background_img' => $random_name,
                     ];
                    DB::table('reconnect_quetions')->where('id', $id)->update($values);
                    DB::commit();
          }

          // if($mcq_images = $request->file('mcq_images')) {
          //           $mcq_images_name = $mcq_images->getClientOriginalName();
          //           $mcq_imagesWithoutSpaces = str_replace(' ', '_', $mcq_images_name); // Replace spaces with underscores
          //           $random_name1 = rand(10,100).$mcq_imagesWithoutSpaces;
          //           // $file->move('public/image',$name);
          //           $mcq_images->move(public_path() . '/uploads/', $random_name1);
          // }

          $values1 = [
                'quetions' => $request->quetions,
                'answer' => $request->answer,
                'right_answer_fact' => $request->right_answer_fact,
                'wrong_answer_fact' => $request->wrong_answer_fact,
                'mcq_options' => $request->mcq_options,
                'mcq_correct_answer' => $request->mcq_correct_answer
            ];
           DB::table('reconnect_quetions')->where('id', $id)->update($values1);
           DB::commit();
           return redirect()->route('view_reconnect_quetions');

           } catch (\Exception $e) {
            DB::rollback();
            //Toastr::error('fail, User Update :)', 'Error');
            return redirect()->back();
        }
    }

    public function updateRescueChampQuetions(Request $request)
    {

        DB::beginTransaction();
        try {
            $id = $request->id;

          $values1 = [
                'question' => $request->question,
                'answer' => $request->answer,
                'right_answer_fact' => $request->right_answer_fact,
                'wrong_answer_fact' => $request->wrong_answer_fact,
                'wrong_title_text' => $request->wrong_title_text,
                'right_title_text' => $request->right_title_text,
                'hint' => $request->hint
            ];
           DB::table('questions')->where('id', $id)->update($values1);
           DB::commit();
           return redirect()->route('view_rescue_quetions');

           } catch (\Exception $e) {
            DB::rollback();
            //Toastr::error('fail, User Update :)', 'Error');
            return redirect()->back();
        }
    }
    public function updateRescueChampHindiQuetions(Request $request)
    {

        DB::beginTransaction();
        try {
            $id = $request->id;

          $values1 = [
                'question' => $request->question,
                'answer' => $request->answer,
                'right_answer_fact' => $request->right_answer_fact,
                'wrong_answer_fact' => $request->wrong_answer_fact,
                'wrong_title_text' => $request->wrong_title_text,
                'right_title_text' => $request->right_title_text,
                'hint' => $request->hint
            ];
           DB::table('questions_hindi')->where('id', $id)->update($values1);
           DB::commit();
           return redirect()->route('view_rescue_hindi_quetions');

           } catch (\Exception $e) {
            DB::rollback();
            //Toastr::error('fail, User Update :)', 'Error');
            return redirect()->back();
        }
    }

    public function removeImg($id)
    {
         $data = DB::table('reconnect_world')->where('id', '1')->first();
         $mcqImages = explode(',', $data->fourth_screen_img);
          unlink(public_path() . '/uploads/'. $mcqImages[$id]);
         //$mcqImages[$index] = $request->id;
         array_splice($mcqImages, $id, 1);
         $updatedMcqImages = implode(',', $mcqImages);
         
         DB::table('reconnect_world')
                            ->where('id', '1')
                            ->update(['fourth_screen_img' => $updatedMcqImages]);
       
        echo 'Remove Successfully';

    }


    public function removeCoralImg($id)
    {
         $data = DB::table('coral_empire_quetions')->where('id', '1')->first();
         $mcqImages = explode(',', $data->mcq_images);
         //$mcqImages[$index] = $request->id;
         array_splice($mcqImages, $id, 1);
         $updatedMcqImages = implode(',', $mcqImages);
         
         DB::table('coral_empire_quetions')
                            ->where('id', '1')
                            ->update(['mcq_images' => $updatedMcqImages]);

        unlink(public_path() . '/uploads/'. $mcqImages[$id]);
        echo 'Remove Successfully';

    }


}