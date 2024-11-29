<?php
declare(strict_types =1);
namespace App\Controller;

use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WeatherController extends AbstractController{
    #[Route("/weather/{countryCode}/{city}")]
    public function forecast(string $countryCode, string $city ): Response{
        $forcasts = [
        
        [
            "date" => new DateTime('2024-01-01'),
            "temperatureCelsius" => 17,
            "flTemperaturCelsuis" => 16,
            "pressure" => 1000,
            "humidity" => 64,
            "wind_speed" => 3.2,
            "wind_deg" => 270,
            "cloudiness" => 75,
            'icon' => 'sun'

        ],
        [
            "date" => new DateTime('2024-01-02'),
            "temperatureCelsius" => 17,
            "flTemperaturCelsuis" => 16,
            "pressure" => 1000,
            "humidity" => 64,
            "wind_speed" => 3.2,
            "wind_deg" => 270,
            "cloudiness" => 75,
            'icon' => 'sun'
        ],
        [
            "date" => new DateTime('2024-01-03'),
            "temperatureCelsius" => 17,
            "flTemperaturCelsuis" => 16,
            "pressure" => 1000,
            "humidity" => 64,
            "wind_speed" => 3.2,
            "wind_deg" => 270,
            "cloudiness" => 75,
            'icon' => 'sun'
        ]
        ];

        $respnse = $this->render('weather/forcast.html.twig',[
            'forcasts' => $forcasts,
            'city' => $city,
            'countryCode' => $countryCode
        ]);
        
        return  $respnse;

    }
}