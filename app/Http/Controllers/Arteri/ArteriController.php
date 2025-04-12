<?php

namespace App\Http\Controllers\Arteri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArteriController extends Controller
{
    public function index(){
        return view('moduls.landing-new.arteri');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //give me a dummy data of an article inside a longtext
        // the given article must contain:
        // 1. title
        // 2. 4 paragraph with a dummy text
        // 3. a blockqoute betweet paragrapgh 2 and 3
        $article = (object)[
            'title' => 'Lorem ipsum dolor sit amet consectetur. Nulla erat commodo viverra in non sagittis cum. Id aliquam scelerisque lorem ut elementum orci',
            'category' => ['Psikologi Kesehatan', 'Artikel'],
            'published_at' => '14 Februari 2025',
            'author' => "Talitha Dwi Arini",
            'body' => '
            <p>Lorem ipsum dolor sit amet consectetur. Justo lacus diam integer elit interdum maecenas tincidunt. Habitant eget luctus tristique cras nunc mauris ultrices sagittis libero. Odio mauris posuere blandit iaculis nec gravida phasellus risus suspendisse. Tellus fusce amet vehicula aliquet faucibus amet vivamus hac. Ultrices aliquam pellentesque amet odio velit. Viverra tristique amet mauris enim sed diam purus in. In tristique tristique adipiscing vel nisl a purus tincidunt. Ultrices orci posuere nec quisque. Faucibus metus at non vestibulum. Non auctor magna parturient massa. Porta amet phasellus nibh amet amet nisl.</p>
            <p>Lorem ipsum dolor sit amet consectetur. Justo lacus diam integer elit interdum maecenas tincidunt. Habitant eget luctus tristique cras nunc mauris ultrices sagittis libero. Odio mauris posuere blandit iaculis nec gravida phasellus risus suspendisse. Tellus fusce amet vehicula aliquet faucibus amet vivamus hac. Ultrices aliquam pellentesque amet odio velit. Viverra tristique amet mauris enim sed diam purus in. In tristique tristique adipiscing vel nisl a purus tincidunt. Ultrices orci posuere nec quisque. Faucibus metus at non vestibulum. Non auctor magna parturient massa. Porta amet phasellus nibh amet amet nisl.</p>
            <blockquote>
                <p>Lorem ipsum dolor sit amet consectetur. Justo lacus diam integer elit interdum maecenas tincidunt.</p>
            </blockquote>
            <p>Lorem ipsum dolor sit amet consectetur. Justo lacus diam integer elit interdum maecenas tincidunt. Habitant eget luctus tristique cras nunc mauris ultrices sagittis libero. Odio mauris posuere blandit iaculis nec gravida phasellus risus suspendisse. Tellus fusce amet vehicula aliquet faucibus amet vivamus hac. Ultrices aliquam pellentesque amet odio velit. Viverra tristique amet mauris enim sed diam purus in. In tristique tristique adipiscing vel nisl a purus tincidunt. Ultrices orci posuere nec quisque. Faucibus metus at non vestibulum. Non auctor magna parturient massa. Porta amet phasellus nibh amet amet nisl.</p>
            <p>Lorem ipsum dolor sit amet consectetur. Justo lacus diam integer elit interdum maecenas tincidunt. Habitant eget luctus tristique cras nunc mauris ultrices sagittis libero. Odio mauris posuere blandit iaculis nec gravida phasellus risus suspendisse. Tellus fusce amet vehicula aliquet faucibus amet vivamus hac. Ultrices aliquam pellentesque amet odio velit. Viverra tristique amet mauris enim sed diam purus in. In tristique tristique adipiscing vel nisl a purus tincidunt. Ultrices orci posuere nec quisque. Faucibus metus at non vestibulum. Non auctor magna parturient massa. Porta amet phasellus nibh amet amet nisl.</p>
        ',
        ];

        return view('moduls.landing-new.arteri-detail', compact('article'));
    }
}
