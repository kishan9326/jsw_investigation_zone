<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class APIController extends Controller
{

    public function game_info()
    {
        $currentTime = now()->format('H:i:s');
        $currentDate = now()->format('Y-m-d');

        $date_value = $currentDate . '  ' . $currentTime;
        DB::table('temp_game_data')->where('created_at','<', $currentDate)->delete();
        $data = DB::table('game_info')->select('*')->distinct()
        ->get()->toArray();
        foreach ($data as $finalData) {
            $dataF['game_id'] = $finalData->game_id;
            $dataF['game_name'] = $finalData->game_name;
            $dataF['big_img'] =  asset('uploads/' . $finalData->big_img);
            $dataF['about_text'] =   $finalData->about_text;
            $dataF['duration_time'] = $finalData->duration_time;
            $dataF['players_count'] = $finalData->players_count ;
            $final_array[] = $dataF;
        }

        $response_array = ['success' => true, 'data' => $final_array];

        return response()->json($response_array, 200);
    }

    public function save_user(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'game_id' => 'required',
        ]);
        //print_r($request->all());
        // echo count($request->name);
        // exit();
        DB::beginTransaction();

        $currentTime = now()->format('H:i:s');

        $currentDate = now()->format('Y-m-d');
        for($i=0;$i<count($request->name);$i++)
        {
            $values = [
            'name' => $request->name[$i],
            'game_id' => $request->game_id,
            'slots_id' => $request->slots_id,
            'created_at' => $currentDate . '  ' . $currentTime,
        ];

        $values1 = [
            'game_id' => $request->game_id,
            'slots_id' => $request->slots_id,
            'created_at' => $currentDate . '  ' . $currentTime,
        ];

        DB::table('users_signup')->insert($values);

        DB::commit();

        DB::table('temp_game_data')->insert($values1);

        DB::commit();    
        }
        
        return response()->json(['success' => true, 'message' => 'Data added successfully'], 201);

    }
    // public function save_user(Request $request)
    // {
    //     $this->validate($request, [
    //         'name' => 'required',
    //         'game_id' => 'required',
    //     ]);
    //     //print_r($request->all());
    //     // echo count($request->name);
    //     // exit();
    //     DB::beginTransaction();

    //     $currentTime = now()->format('H:i:s');

    //     $currentDate = now()->format('Y-m-d');
    //       $names = implode(',', $request->name);
        
        
    //         $values = [
    //         'name' => $names,
    //         'game_id' => $request->game_id,
    //         'slots_id' => $request->slots_id,
    //         'created_at' => $currentDate . '  ' . $currentTime,
    //     ];

    //     $values1 = [
    //         'game_id' => $request->game_id,
    //         'slots_id' => $request->slots_id,
    //         'created_at' => $currentDate . '  ' . $currentTime,
    //     ];

    //     DB::table('users_signup')->insert($values);

    //     DB::commit();

    //     DB::table('temp_game_data')->insert($values1);

    //     DB::commit();    
        
        
    //     return response()->json(['success' => true, 'message' => 'Data added successfully'], 201);

    // }



    public function game_slots($id)
    {
        $data = DB::table('game_slots')->select('*')->distinct()
            ->get()->toArray();
        foreach ($data as $finalData) {
            $game_slots = DB::table('temp_game_data')->select('*')->where([['game_id','=',$id],['slots_id','=',$finalData->id]])->distinct()
            ->get()->toArray();
            $test = count($game_slots);
            //echo $test;
            // exit();
            $dataF['id'] = $finalData->id;
            $dataF['slots'] = $finalData->slots;
            $dataF['status'] = ($test < 5 ) ? 1 : 0;
            $final_array[] = $dataF;
        }
        //exit();

        $response_array = ['success' => true, 'data' => $final_array];

        return response()->json($response_array, 200);
    }

    public function game_content($id)
    {
            $game_data = DB::table('game1')->select('*')->get()->toArray();
            $dataW['ticker_time'] = $game_data[0]->ticker_time;
            $dataW['first_screen_title'] = $game_data[0]->first_screen_title;
            $dataW['first_screen_main_background_img'] = asset('uploads/' . $game_data[0]->first_screen_main_background_img);
            $dataW['first_screen_circle_img'] = asset('uploads/' . $game_data[0]->first_screen_circle_img);
            $dataW['first_screen_button_text'] = $game_data[0]->first_screen_button_text;
            $dataW['intro_screen_video'] = asset('uploads/' . $game_data[0]->intro_screen_video);
            $dataW['intro_screen_button'] = $game_data[0]->intro_screen_button;
            $dataW['second_screen_title'] = $game_data[0]->second_screen_title;
            $dataW['second_main_background_img'] = asset('uploads/' . $game_data[0]->second_main_background_img);
            $dataW['second_screen_button_text'] = $game_data[0]->second_screen_button_text;
            $dataW['third_screen_main_background_img'] = asset('uploads/' . $game_data[0]->third_screen_main_background_img);
            $dataW['third_screen_wardname'] = $game_data[0]->third_screen_wardname;
            $dataW['seven_screen_text'] = $game_data[0]->seven_screen_text;
            $dataW['nine_screen_video'] = asset('uploads/' . $game_data[0]->nine_screen_video);
            $dataW['ten_screen_text'] = $game_data[0]->ten_screen_text;
            $dataW['ten_screen_button_text'] = $game_data[0]->ten_screen_button_text;
            $dataW['eleven_screen_image'] = asset('uploads/' . $game_data[0]->eleven_screen_image);
            $dataW['eleven_screen_text'] = $game_data[0]->eleven_screen_text;
            $dataW['twelve_screen_image'] = asset('uploads/' . $game_data[0]->twelve_screen_image);
            $dataW['therteen_screen_image'] = asset('uploads/' . $game_data[0]->therteen_screen_image);
            $dataW['therteen_screen_text'] = $game_data[0]->therteen_screen_text;
            $dataW['fourteen_screen_image'] = asset('uploads/' . $game_data[0]->fourteen_screen_image);
            $dataW['fourteen_screen_text'] = $game_data[0]->fourteen_screen_text;
            $dataW['fourteen_screen_sub_text'] = $game_data[0]->fourteen_screen_sub_text;
            $dataW['button_text'] = 'Next';
            $dataW['submit_button_text'] = 'Submit';
            // ----------kishan
            $dataW['right_title_text'] = $game_data[0]->right_title_text;
            $dataW['wrong_title_text'] = $game_data[0]->wrong_title_text;
            $dataW['try_again_button_text'] = $game_data[0]->try_again_button_text;
            $dataW['next_button_text'] = $game_data[0]->next_button_text;
            $dataW['enter_button_text'] = $game_data[0]->enter_button_text;
            // ----------kishan


            $question_data = DB::table('questions')->select('*')->where('game_id','=',$id)->distinct()
            ->get()->toArray();
            foreach ($question_data as $finalData) {
                $dataQ['question'] = $finalData->question;
                $dataQ['answer'] = $finalData->answer;
                $dataQ['right_answer_fact'] = $finalData->right_answer_fact;
                $dataQ['wrong_answer_fact'] = $finalData->wrong_answer_fact;
                $dataQ['hint'] = $finalData->hint;
                $dataQ['right_title_text'] = $finalData->right_title_text;
                $dataQ['wrong_title_text'] = $finalData->wrong_title_text;
                $dataW['quetions'][] = $dataQ;
            }
            
            $final_array[] = $dataW;

            $response_array = ['success' => true, 'data' => $final_array];

            return response()->json($response_array, 200);

    }



     public function game_content_hindi()
    {
            $game_data = DB::table('rescue_champ_hindi')->select('*')->get()->toArray();
            $dataW['ticker_time'] = $game_data[0]->ticker_time;
            $dataW['first_screen_title'] = $game_data[0]->first_screen_title;
            $dataW['first_screen_main_background_img'] = asset('uploads/' . $game_data[0]->first_screen_main_background_img);
            $dataW['first_screen_circle_img'] = asset('uploads/' . $game_data[0]->first_screen_circle_img);
            $dataW['first_screen_button_text'] = $game_data[0]->first_screen_button_text;
            $dataW['intro_screen_video'] = asset('uploads/' . $game_data[0]->intro_screen_video);
            $dataW['intro_screen_button'] = $game_data[0]->intro_screen_button;
            $dataW['second_screen_title'] = $game_data[0]->second_screen_title;
            $dataW['second_main_background_img'] = asset('uploads/' . $game_data[0]->second_main_background_img);
            $dataW['second_screen_button_text'] = $game_data[0]->second_screen_button_text;
            $dataW['third_screen_main_background_img'] = asset('uploads/' . $game_data[0]->third_screen_main_background_img);
            $dataW['third_screen_wardname'] = $game_data[0]->third_screen_wardname;
            $dataW['nine_screen_video'] = asset('uploads/' . $game_data[0]->nine_screen_video);
            $dataW['ten_screen_text'] = $game_data[0]->ten_screen_text;
            $dataW['ten_screen_button_text'] = $game_data[0]->ten_screen_button_text;
            $dataW['eleven_screen_image'] = asset('uploads/' . $game_data[0]->eleven_screen_image);
            $dataW['eleven_screen_text'] = $game_data[0]->eleven_screen_text;
            $dataW['twelve_screen_image'] = asset('uploads/' . $game_data[0]->twelve_screen_image);
            $dataW['therteen_screen_image'] = asset('uploads/' . $game_data[0]->therteen_screen_image);
            $dataW['therteen_screen_text'] = $game_data[0]->therteen_screen_text;
            $dataW['fourteen_screen_image'] = asset('uploads/' . $game_data[0]->fourteen_screen_image);
            $dataW['fourteen_screen_text'] = $game_data[0]->fourteen_screen_text;
            $dataW['fourteen_screen_sub_text'] = $game_data[0]->fourteen_screen_sub_text;
            $dataW['button_text'] = 'Next';
            $dataW['submit_button_text'] = 'Submit';
   // ----------kishan
   $dataW['right_title_text'] = $game_data[0]->right_title_text;
   $dataW['wrong_title_text'] = $game_data[0]->wrong_title_text;
   $dataW['try_again_button_text'] = $game_data[0]->try_again_button_text;
   $dataW['next_button_text'] = $game_data[0]->next_button_text;
   $dataW['enter_button_text'] = $game_data[0]->enter_button_text;
   // ----------kishan

            $question_data = DB::table('questions_hindi')->select('*')->where('game_id','=','1')->distinct()
            ->get()->toArray();
            foreach ($question_data as $finalData) {
                $dataQ['question'] = $finalData->question;
                $dataQ['right_answer_fact'] = $finalData->right_answer_fact;
                $dataQ['wrong_answer_fact'] = $finalData->wrong_answer_fact;
                $dataQ['hint'] = $finalData->hint;
                $dataQ['right_title_text'] = $finalData->right_title_text;
                $dataQ['wrong_title_text'] = $finalData->wrong_title_text;
                $dataW['quetions'][] = $dataQ;
            }
            
            $final_array[] = $dataW;

            $response_array = ['success' => true, 'data' => $final_array];

            return response()->json($response_array, 200);

    }



    public function reconnect_world_data()
    {
            $game_data = DB::table('reconnect_world')->select('*')->get()->toArray();
            $dataW['ticker_time'] = $game_data[0]->ticker_time;
            $dataW['first_screen_title'] = $game_data[0]->first_screen_title;
            $dataW['description_first'] = $game_data[0]->description_first;
            $dataW['description_second'] = $game_data[0]->description_second;
            $dataW['first_screen_center_img'] = asset('uploads/' . $game_data[0]->first_screen_center_img);
            $dataW['first_screen_circle_img'] = asset('uploads/' . $game_data[0]->first_screen_circle_img);
            $dataW['background_img'] = asset('uploads/' . $game_data[0]->background_img);
            $dataW['button_text'] = $game_data[0]->button_text;
            $dataW['bottom_line_text'] = $game_data[0]->bottom_line_text;
            $dataW['second_screen_bakground_img'] = asset('uploads/' . $game_data[0]->second_screen_bakground_img);
            $dataW['second_screen_bakground_center_img'] = asset('uploads/' . $game_data[0]->second_screen_bakground_center_img);
            $dataW['second_screen_title'] = $game_data[0]->second_screen_title;
            $dataW['second_screen_text'] = $game_data[0]->second_screen_text;
            $dataW['second_screen_password'] = $game_data[0]->second_screen_password;
            $dataW['second_screen_bottom_line_text'] = $game_data[0]->second_screen_bottom_line_text;
            $dataW['second_screen_button_text'] = $game_data[0]->second_screen_button_text;
            $dataW['third_background_img'] = asset('uploads/' . $game_data[0]->third_background_img);
            $dataW['third_screen_bakground_center_img'] = asset('uploads/' . $game_data[0]->third_screen_bakground_center_img);
            $dataW['seventh_screen_background_img'] = asset('uploads/' . $game_data[0]->fourth_screen_background_img);
            $dataW['seventh_screen_center_img'] = asset('uploads/' . $game_data[0]->fourth_screen_center_img);
            $dataW['seventh_screen_img'] = $game_data[0]->fourth_screen_img;
            $dataW['seventh_screen_text'] = $game_data[0]->fourth_screen_text;
            $dataW['seventh_screen_quetion_selection'] = $game_data[0]->fourth_screen_quetion_selection;
            $dataW['seventh_screen_button'] = $game_data[0]->fourth_screen_button;
            $dataW['nine_screen_background_img'] = asset('uploads/' . $game_data[0]->fifth_screen_background_img);
            $dataW['nine_screen_background_centerimg'] = asset('uploads/' . $game_data[0]->fifth_screen_background_centerimg);
            $dataW['nine_screen_text'] = $game_data[0]->fifth_screen_text;
            $dataW['nine_screen_button_text'] = $game_data[0]->fifth_screen_button_text;
            $dataW['nine_screen_img'] = asset('uploads/' . $game_data[0]->fifth_screen_img);
            $dataW['eleven_screen_background_img'] = asset('uploads/' . $game_data[0]->sixth_screen_background_img);
            $dataW['eleven_screen_background_center_img'] = asset('uploads/' . $game_data[0]->sixth_screen_background_center_img);
            $dataW['eleven_screen_img'] = asset('uploads/' . $game_data[0]->sixth_screen_img);
            $dataW['eleven_text'] = $game_data[0]->sixth_text;
            $dataW['eleven_button_text'] = $game_data[0]->sixth_button_text;
            $dataW['twelve_screen_background_img'] = asset('uploads/' . $game_data[0]->sevanth_screen_background_img);
            $dataW['twelve_screen_background_center_img'] = asset('uploads/' . $game_data[0]->sevanth_screen_background_center_img);
            $dataW['twelve_screen_img'] = asset('uploads/' . $game_data[0]->sevanth_screen_img);
            $dataW['twelve_text'] = $game_data[0]->sevanth_text;
            $dataW['twelve_button_text'] = $game_data[0]->seven_button_text;
            $dataW['twelve_screen_option'] = $game_data[0]->sevanth_screen_option;
            $dataW['thirteen_screen_background_img'] = asset('uploads/' . $game_data[0]->final_screen_background_img);
            $dataW['thirteen_screen_img'] = asset('uploads/' . $game_data[0]->final_screen_img);
            $dataW['thirteen_screen_title'] = $game_data[0]->final_screen_title;
            $dataW['thirteen_screen_bottom_text'] = $game_data[0]->final_screen_bottom_text;
            $dataW['answer_background_img'] = asset('uploads/' . $game_data[0]->answer_background_img);
            $dataW['asset_base_url'] = 'uploads/';
            $question_data = DB::table('reconnect_quetions')->select('*')->distinct()
            ->get()->toArray();
            foreach ($question_data as $finalData) {
                $dataQ['quetions'] = $finalData->quetions;
                $dataQ['answer'] = $finalData->answer;
                $dataQ['background_img'] = asset('uploads/' . $finalData->background_img);
                $dataQ['right_answer_fact'] = $finalData->right_answer_fact;
                $dataQ['wrong_answer_fact'] = $finalData->wrong_answer_fact;
                $dataQ['mcq_options'] = $finalData->mcq_options;
                $dataQ['mcq_correct_answer'] = $finalData->mcq_correct_answer;
                $dataQ['button_text'] = $finalData->button_text;
                $dataW['quetions'][] = $dataQ;
            }
            
            $final_array[] = $dataW;

            $response_array = ['success' => true, 'data' => $final_array];

            return response()->json($response_array, 200);

    }



     public function coral_empire_data()
    {
            $game_data = DB::table('coral_empire')->select('*')->get()->toArray();
            $dataW['ticker_time'] = $game_data[0]->ticker_time;
            $dataW['first_screen_title'] = $game_data[0]->first_screen_title;
            $dataW['first_screen_center_img'] = asset('uploads/' . $game_data[0]->first_screen_center_img);
            $dataW['first_screen_circle_img'] = asset('uploads/' . $game_data[0]->first_screen_circle_img);
            $dataW['first_screen_background_img'] = asset('uploads/' . $game_data[0]->first_screen_background_img);
            $dataW['first_screen_button_text'] = $game_data[0]->first_screen_button_text;
            $dataW['second_screen_text'] = $game_data[0]->second_screen_text;
            $dataW['second_screen_img'] = asset('uploads/' . $game_data[0]->second_screen_img);
            $dataW['second_screen_center_img'] = asset('uploads/' . $game_data[0]->second_screen_center_img);
            $dataW['second_screen_background_img'] = asset('uploads/' . $game_data[0]->second_screen_background_img);
            $dataW['second_screen_button_text'] = $game_data[0]->second_screen_button_text;
            $dataW['third_screen_text'] = $game_data[0]->third_screen_text;
            $dataW['third_screen_background_img'] = asset('uploads/' . $game_data[0]->third_screen_background_img);
            $dataW['third_screen_center_img'] = asset('uploads/' . $game_data[0]->third_screen_center_img);
            $dataW['third_screen_button_text'] = $game_data[0]->third_screen_button_text;
            $dataW['fourth_screen_text'] = $game_data[0]->fourth_screen_text;
            $dataW['fourth_screen_sub_text'] = $game_data[0]->fourth_screen_sub_text;
            $dataW['fourth_screen_img'] = asset('uploads/' . $game_data[0]->fourth_screen_img);
            $dataW['fourth_screen_background_img'] = asset('uploads/' . $game_data[0]->fourth_screen_background_img);
            $dataW['fourth_screen_center_img'] = asset('uploads/' . $game_data[0]->fourth_screen_center_img);
            $dataW['fourth_screen_button_text'] = $game_data[0]->fourth_screen_button_text;
            $dataW['fifth_screen_background_img'] = asset('uploads/' . $game_data[0]->fifth_screen_background_img);
            $dataW['fifth_screen_center_img'] = asset('uploads/' . $game_data[0]->fifth_screen_center_img);
            $dataW['fifth_screen_img'] = asset('uploads/' . $game_data[0]->fifth_screen_img);
            $dataW['fifth_screen_text'] = $game_data[0]->fifth_screen_text;
            $dataW['fifth_screen_button_text'] = $game_data[0]->fifth_screen_button_text;
            $dataW['eight_screen_background_img'] = asset('uploads/' . $game_data[0]->sixth_screen_background_img);
            $dataW['eight_screen_center_img'] = asset('uploads/' . $game_data[0]->sixth_screen_center_img);
            $dataW['eight_screen_img'] = asset('uploads/' . $game_data[0]->sixth_screen_img);
            $dataW['eight_screen_text'] = $game_data[0]->sixth_screen_text;
            $dataW['eight_screen_sub_text'] = $game_data[0]->sixth_screen_sub_text;
            $dataW['eight_screen_button_text'] = $game_data[0]->sixth_screen_button_text;
            $dataW['ten_screen_background_img'] = asset('uploads/' . $game_data[0]->seventh_screen_background_img);
            $dataW['ten_screen_center_img'] = asset('uploads/' . $game_data[0]->seventh_screen_center_img);
            $dataW['ten_screen_img'] = asset('uploads/' . $game_data[0]->seventh_screen_img);
            $dataW['ten_screen_text'] = $game_data[0]->seventh_screen_text;
            $dataW['ten_screen_button_text'] = $game_data[0]->seventh_screen_button_text;
            $dataW['ten_screen_calling_img'] = asset('uploads/' . $game_data[0]->seventh_screen_calling_img);
            $dataW['eleven_screen_text'] = $game_data[0]->eight_screen_text;
            $dataW['eleven_screen_background_img'] = asset('uploads/' . $game_data[0]->eight_screen_background_img);
            $dataW['eleven_screen_center_img'] = asset('uploads/' . $game_data[0]->eight_screen_center_img);
            $dataW['eleven_screen_img'] = asset('uploads/' . $game_data[0]->eight_screen_img);
            $dataW['eleven_screen_button_text'] = $game_data[0]->eight_screen_button_text;
            $dataW['thirteen_screen_text'] = $game_data[0]->nine_screen_text;
            $dataW['thirteen_screen_background_img'] = asset('uploads/' . $game_data[0]->nine_screen_background_img);
            $dataW['thirteen_screen_center_img'] = asset('uploads/' . $game_data[0]->nine_screen_center_img);
            $dataW['thirteen_screen_img'] = asset('uploads/' . $game_data[0]->nine_screen_img);
            $dataW['thirteen_screen_button_text'] = $game_data[0]->nine_screen_button_text;
            $dataW['sixteen_screen_text'] = $game_data[0]->ten_screen_text;
            $dataW['sixteen_screen_sub_text'] = $game_data[0]->ten_screen_sub_text;
            $dataW['sixteen_screen_background_img'] = asset('uploads/' . $game_data[0]->ten_screen_background_img);
            $dataW['sixteen_screen_center_img'] = asset('uploads/' . $game_data[0]->ten_screen_center_img);
            $dataW['right_background_img'] = asset('uploads/' . $game_data[0]->right_background_img);
            $dataW['wrong_background_img'] = asset('uploads/' . $game_data[0]->wrong_background_img);
            $dataW['asset_base_url'] = 'uploads/';
            $question_data = DB::table('coral_empire_quetions')->select('*')->distinct()
            ->get()->toArray();
            foreach ($question_data as $finalData) {
                $dataQ['question'] = $finalData->question;
                $dataQ['question_sub_text'] = $finalData->question_sub_text;
                $dataQ['quetion_button_text'] = $finalData->quetion_button_text;
                $dataQ['answer'] = $finalData->answer;
                $dataQ['quetion_image'] = (empty($finalData->quetion_image)) ? null : (asset('uploads/' . $finalData->quetion_image));
                $dataQ['quetion_background_img'] = (empty($finalData->quetion_background_img)) ? null : (asset('uploads/' . $finalData->quetion_background_img));
                $dataQ['right_answer_fact'] = $finalData->right_fact;
                $dataQ['wrong_answer_fact'] = $finalData->wrong_fact;
                $dataQ['right_text'] = $finalData->right_text;
                $dataQ['wrong_text'] = $finalData->wrong_text;
                $dataQ['mcq_option'] = $finalData->macq_option;
                $dataQ['mcq_images'] = $finalData->mcq_images;
                $dataW['quetions'][] = $dataQ;
            }
            
            $final_array[] = $dataW;

            $response_array = ['success' => true, 'data' => $final_array];

            return response()->json($response_array, 200);

    }

public function game_content_2()
{
    $data = DB::table('cosmic_cleanup')->select('*')->distinct()->get()->toArray();

    // Iterate through the data and update image and video URLs
    foreach ($data as $item) {
        $item->Bgvideo1 = asset('uploads/game2/' . $item->Bgvideo1);
        $item->S5QuestionImage = asset('uploads/game2/' . $item->S5QuestionImage);
        $item->S5Bgimage = asset('uploads/game2/' . $item->S5Bgimage);
        $item->S4RightImage = asset('uploads/game2/' . $item->S4RightImage);
        $item->S2Image = asset('uploads/game2/' . $item->S2Image);
        $item->Bgvideo2 = asset('uploads/game2/' . $item->Bgvideo2);
        $item->S1Image = asset('uploads/game2/' . $item->S1Image);
        $item->Bgvideo3 = asset('uploads/game2/' . $item->Bgvideo3);
        $item->Bgvideo3_sub = asset('uploads/game2/' . $item->Bgvideo3_sub);
        $item->Bgvideo4 = asset('uploads/game2/' . $item->Bgvideo4);
        $item->Bgvideo5 = asset('uploads/game2/' . $item->Bgvideo5);
        $item->Bgvideo6 = asset('uploads/game2/' . $item->Bgvideo6);
        $item->Bgvideo7 = asset('uploads/game2/' . $item->Bgvideo7);
        $item->Bgvideo8 = asset('uploads/game2/' . $item->Bgvideo8);
        $item->Bgvideo9 = asset('uploads/game2/' . $item->Bgvideo9);
        $item->Bgvideo10 = asset('uploads/game2/' . $item->Bgvideo10);
        $item->Bgvideo11 = asset('uploads/game2/' . $item->Bgvideo11);
    }

    $response_array = ['success' => true, 'data' => $data];

    return response()->json($response_array, 200);
}

}
