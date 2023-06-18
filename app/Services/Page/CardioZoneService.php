<?php
namespace App\Services\Page;

use App\DataTransferObjects\PriceCardDto;
use App\DataTransferObjects\TrainingPageDto;

final class CardioZoneService extends PageService
{
    function getData(): TrainingPageDto
    {
        $title = __('Cardio zone');
        $description = __('A better way to live');
        $features = [
            __('FitNation Dance') => __('Group dance workouts that help you stay in shape and develop coordination while enjoying the rhythm of the music.'),
            __('FitNation HIIT') => __('A high-intensity workout that will help you burn fat, improve your cardiovascular system and increase your endurance.'),
            __('FitNation Yoga') => __('Group yoga classes to help you improve flexibility, posture, and relieve stress.'),
            __('FitNation Bootcamp') => __('Outdoor workouts that will help you strengthen your muscles, increase your stamina and get a boost of energy.'),
            __('FitNation Strength') => __('Group workouts using free weights and machines to help develop muscle strength and form.'),
            __('FitNation Pilates') => __('Pilates group classes to help strengthen the muscles of the body, improve flexibility and coordination of movements.')
        ];
        $priceCards = collect([
            [
                'title' => 'FitNation Dance',
                'price' => 500,
                'description' => 'Зарядитесь энергией и танцуйте',
                'features' => [
                    'Поддерживает форму',
                    'Развивает координацию',
                    'Улучшает настроение',
                    'Помогает сжигать калории',
                ],
            ],
            [
                'title' => 'FitNation HIIT',
                'price' => 1500,
                'description' => 'Максимальный результат за минимальное время',
                'features' => [
                    'Помогает сжигать жир',
                    'Повышает выносливость',
                    'Усиливает метаболизм',
                    'Улучшает настроение',
                ],
            ],
            [
                'title' => 'FitNation Yoga',
                'price' => 800,
                'description' => 'Наслаждайтесь тишиной и гармонией',
                'features' => [
                    'Улучшает гибкость',
                    'Снижает уровень стресса',
                    'Усиливает мышцы',
                    'Улучшает сон',
                ],
            ],
            [
                'title' => 'FitNation Bootcamp',
                'price' => 1900,
                'description' => 'Тренируйтесь на свежем воздухе',
                'features' => [
                    'Тонус организма',
                    'Разные упражнения',
                    'Развивает силу',
                    'Повышает уровень энергии',
                ],
            ],
            [
                'title' => 'FitNation Strength',
                'price' => 2600,
                'description' => 'Развивайте силу и форму мышц',
                'features' => [
                    'Контроль над телом',
                    'Помогает улучшить осанку',
                    'Улучшает настроение',
                    'Помогает сжигать калории',
                ],
            ],
            [
                'title' => 'FitNation Pilates',
                'price' => 300,
                'description' => 'Укрепляйте мышцы корпуса и улучшайте гибкость',
                'features' => [
                    'Укрепляет мышцы',
                    'Улучшает координацию',
                    'Улучшает настроение',
                    'Помогает сжигать калории',
                ],
            ],
        ])->map(function ($data) {
            return new PriceCardDto(
                title: $data['title'],
                price: $data['price'],
                description: $data['description'],
                features: $data['features'],
            );
        })->all();

        return new TrainingPageDto(
            title: $title,
            description: $description,
            features: $features,
            priceCards: $priceCards,
        );
    }
}
