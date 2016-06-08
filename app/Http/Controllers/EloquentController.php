<?php

/*
|--------------------------------------------------------------------------
| Eloquent Controller
|--------------------------------------------------------------------------
| [Power of Accessors and Mutators]
|
| @author: Raimi Ademola
| 
|
*/
namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EloquentController extends Controller
{
	/**
	 * This method displays the id and replace it with the first name, check the user Model
	 * 
	 * @return  Http request
	 */
    public function eloquentDisplayIdToString()
    {
    	$app        = User::find(1);
    	$idToSTring = $app->id;

    	return view('eloquent.eloquent-id', compact('idToSTring'));
    }

    /**
	 * This method displays the last name and make sure the first letter is converted to capital
	 * Kindly check the User Model
	 * 
	 * @return  Http request
	 */
    public function eloquentDisplaylastName()
    {
    	$app      = User::find(1);
    	$lastName = $app->last_name;

    	return view('eloquent.eloquent-last-name', compact('lastName'));
    }

    /**
	 * This method displays the first name and make sure the first letter is converted to capital
	 * Kindly check the User Model
	 * 
	 * @return  Http request
	 */
    public function eloquentDisplayfirstName()
    {
    	$app       = User::find(1);
    	$firstName = $app->first_name;

    	return view('eloquent.eloquent-first-name', compact('firstName'));
    }

    /**
	 * This method displays the full name of the user and make sure the last name is capitalize
	 * even though the user inputed the last name all in lowercase. 
	 * Kindly check the User Model
	 * 
	 * @return  Http request
	 */
    public function eloquentDisplayfullName()
    {
    	$app      = User::find(2);
    	$fullName = $app->full_name;

    	return view('eloquent.eloquent-full-name', compact('fullName'));
    }
}
