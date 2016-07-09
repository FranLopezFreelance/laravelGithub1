<?php

namespace App\Http\Controllers;

use App\Card;
use App\Http\Controllers\Controller;

class CardsController extends Controller {

	public function index() {

		$cards = Card::all();
		return view('pages.cards.index', compact('cards'));
	}

	public function show(Card $card) {

		$card->load('notes.user');
		return view('pages.cards.show', compact('card'));

	}

}
