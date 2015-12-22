<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;

class GameController extends Controller
{
    public function Safe()
    {
        $car_park = array ("Nissan Micra", "Peugeot 107", "Fiat Punto", "Mini Cooper S", "Vauxhall Insignia", "Audi A3", "BMW 1 Series MSport", "Audi RS7", "Ferrari 599 GTB Fiorano ", "Mercedes-Benz SLR McLaren ", "Bugatti EB Veyron");

        $car_value = array ("200", "400", "500", "700", "800", "900", "1100", "1200","1500", "1500", "1700", "2000", "3000", "4000", "4500", "5000");

        $location_array = array("England", "Italy", "Iraq", "France", "U.S.A", "Sierra Leone", "Spain", "China");

        $rank_array = array("Tramp.", "Pikey.", "Goon.", "Thug.", "Gangster.", "Terrorist.", "Gang Leader.", "Hustler.", "Capo.", "Under Boss.", "Boss.", "WarLord.", "Godfather.", "God Of War.", "Emperor.", "Sovereign.", "Admin/Coder.", "Moderator.", "Owner.", "Admin");

        $rank_exp_array = array("51", "151", "301", "801", "2501", "5501", "9001", "16001", "25001", "36001", "50001", "75001", "110001", "150001", "300001");

        $gun_array = array("Armed less.", "Colt Derringer.", "Smith & Wesson.", "Colt SAA.", "Winchester.", "Shotgun.", "Thompson.", "Machine Gun.");

        $gun_cost_array = array("50000", "150000", "200000", "500000", "1000000", "200", "500");

        $protection_array = array("None.", "Guard Dog.", "Trained Guard Dog.", "Armed Escort.", "2 Armed Escorts.", "Reinforced Pontiac.", "armored Ford T.", "Armored Duesenberg.");

        $protection_cost_array = array("50000", "150000", "350000", "550000", "1500000", "200", "500");

        $wealth_array = array("Broke.", "Penny less.", "very Poor.", "Poor.", "Eaner.", "Wealthy.", "Rich.", "Extremely Rich.", "Millionaire.", "Multi Millionaire.", "Rich Millionaire.", "Crazy Millionaire.", "Insane Millionaire.", "Billionaire.", "Multi Billionaire.", "Admin Wealth.");
    }
}