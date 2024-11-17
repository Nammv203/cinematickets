<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use App\Repositories\FilmRepository;

/**
 * Class CategoriesController.
 *
 * @package namespace App\Http\Controllers;
 */
class CategoriesController extends Controller
{
    protected $categoryRepository;
    protected $filmRepository;

    public function __construct(
        CategoryRepository $categoryRepository,
        FilmRepository $filmRepository
    )
    {
        $this->categoryRepository = $categoryRepository;
        $this->filmRepository = $filmRepository;
    }

    public function index()
    {
        return view('website.pages.movie_category');
    }

    public function showDetail($id)
    {
        $film = $this->filmRepository->find($id);

        return view('website.pages.movie_single', compact('film'));
    }

    public function showBookingPage()
    {
        return view('website.pages.movie_booking');
    }

    public function showSeatBookingPage()
    {
        return view('website.pages.seat_booking');
    }
}
