<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StringMatchingController extends Controller
{
    //

    public function index(){

        return view('view');
    }

    public function checkString(Request $request){

        // dd(1);
        $masterString = $request->input('master_string');
        // dd($masterString);
        $inputStrings = $request->input('input_strings');

        //dd($inputStrings);

        $output =[];

        foreach($inputStrings as $inputString){

            $availableChars = $masterString;

            $match = true;

            for($i =0; $i < strlen($inputString); $i++){

                $char = $inputString[$i];

                $pos = strpos($availableChars, $char);

                if($pos !== false){

                   $availableChars = substr_replace($availableChars, '', $pos, 1);

                } else{
                    $match = false;
                    break;
                }

                $output[$inputString] = $match ? 'Yes' : 'No';


            }

           // dd($output);

            return view('view')->with('output',$output);

        }
    }
}
