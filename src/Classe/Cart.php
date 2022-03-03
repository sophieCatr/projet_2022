<?php

namespace App\Classe;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

class Cart {

    private $sessions;

    public function __construct(SessionInterface $session) {
        $this->sessions = $session;
    }

    public function add($id) {
        $cart = $this->sessions->get('cart', []);

        if (!empty($cart[$id])) {
            $cart[$id]++;
        } else
            $cart[$id] = 1;
        
        $this->sessions->set('cart', $cart);
    }

    public function get() {
        return $this->sessions->get('cart');
    }

    public function remove() {
        return $this->sessions->remove('cart');
    }
}

