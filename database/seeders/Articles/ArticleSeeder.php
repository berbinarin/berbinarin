<?php

namespace Database\Seeders\Articles;

use Illuminate\Database\Seeder;
use App\Models\Articles\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'title' => 'Teknologi Masa Depan',
            'category_id' => 1,
            'author_id' => 1,
            'cover_image' => 'uploads/articles/pendidikan_era_digital.jpg',
            'content' => '
            <p>Lorem ipsum dolor sit amet consectetur. Justo lacus diam integer elit interdum maecenas tincidunt. Habitant eget luctus tristique cras nunc mauris ultrices sagittis libero. Odio mauris posuere blandit iaculis nec gravida phasellus risus suspendisse. Tellus fusce amet vehicula aliquet faucibus amet vivamus hac. Ultrices aliquam pellentesque amet odio velit. Viverra tristique amet mauris enim sed diam purus in. In tristique tristique adipiscing vel nisl a purus tincidunt. Ultrices orci posuere nec quisque. Faucibus metus at non vestibulum. Non auctor magna parturient massa. Porta amet phasellus nibh amet amet nisl.</p>
            <p>Lorem ipsum dolor sit amet consectetur. Justo lacus diam integer elit interdum maecenas tincidunt. Habitant eget luctus tristique cras nunc mauris ultrices sagittis libero. Odio mauris posuere blandit iaculis nec gravida phasellus risus suspendisse. Tellus fusce amet vehicula aliquet faucibus amet vivamus hac. Ultrices aliquam pellentesque amet odio velit. Viverra tristique amet mauris enim sed diam purus in. In tristique tristique adipiscing vel nisl a purus tincidunt. Ultrices orci posuere nec quisque. Faucibus metus at non vestibulum. Non auctor magna parturient massa. Porta amet phasellus nibh amet amet nisl.</p>
            <blockquote>
                <p>Lorem ipsum dolor sit amet consectetur. Justo lacus diam integer elit interdum maecenas tincidunt.</p>
            </blockquote>
            <p>Lorem ipsum dolor sit amet consectetur. Justo lacus diam integer elit interdum maecenas tincidunt. Habitant eget luctus tristique cras nunc mauris ultrices sagittis libero. Odio mauris posuere blandit iaculis nec gravida phasellus risus suspendisse. Tellus fusce amet vehicula aliquet faucibus amet vivamus hac. Ultrices aliquam pellentesque amet odio velit. Viverra tristique amet mauris enim sed diam purus in. In tristique tristique adipiscing vel nisl a purus tincidunt. Ultrices orci posuere nec quisque. Faucibus metus at non vestibulum. Non auctor magna parturient massa. Porta amet phasellus nibh amet amet nisl.</p>
            <p>Lorem ipsum dolor sit amet consectetur. Justo lacus diam integer elit interdum maecenas tincidunt. Habitant eget luctus tristique cras nunc mauris ultrices sagittis libero. Odio mauris posuere blandit iaculis nec gravida phasellus risus suspendisse. Tellus fusce amet vehicula aliquet faucibus amet vivamus hac. Ultrices aliquam pellentesque amet odio velit. Viverra tristique amet mauris enim sed diam purus in. In tristique tristique adipiscing vel nisl a purus tincidunt. Ultrices orci posuere nec quisque. Faucibus metus at non vestibulum. Non auctor magna parturient massa. Porta amet phasellus nibh amet amet nisl.</p>
        ',
        ]);

        Article::create([
            'title' => 'Tips Hidup Sehat',
            'category_id' => 2,
            'author_id' => 2,
            'cover_image' => 'uploads/articles/pendidikan_era_digital.jpg',
            'content' => '
            <p>Lorem ipsum dolor sit amet consectetur. Justo lacus diam integer elit interdum maecenas tincidunt. Habitant eget luctus tristique cras nunc mauris ultrices sagittis libero. Odio mauris posuere blandit iaculis nec gravida phasellus risus suspendisse. Tellus fusce amet vehicula aliquet faucibus amet vivamus hac. Ultrices aliquam pellentesque amet odio velit. Viverra tristique amet mauris enim sed diam purus in. In tristique tristique adipiscing vel nisl a purus tincidunt. Ultrices orci posuere nec quisque. Faucibus metus at non vestibulum. Non auctor magna parturient massa. Porta amet phasellus nibh amet amet nisl.</p>
            <p>Lorem ipsum dolor sit amet consectetur. Justo lacus diam integer elit interdum maecenas tincidunt. Habitant eget luctus tristique cras nunc mauris ultrices sagittis libero. Odio mauris posuere blandit iaculis nec gravida phasellus risus suspendisse. Tellus fusce amet vehicula aliquet faucibus amet vivamus hac. Ultrices aliquam pellentesque amet odio velit. Viverra tristique amet mauris enim sed diam purus in. In tristique tristique adipiscing vel nisl a purus tincidunt. Ultrices orci posuere nec quisque. Faucibus metus at non vestibulum. Non auctor magna parturient massa. Porta amet phasellus nibh amet amet nisl.</p>
            <blockquote>
                <p>Lorem ipsum dolor sit amet consectetur. Justo lacus diam integer elit interdum maecenas tincidunt.</p>
            </blockquote>
            <p>Lorem ipsum dolor sit amet consectetur. Justo lacus diam integer elit interdum maecenas tincidunt. Habitant eget luctus tristique cras nunc mauris ultrices sagittis libero. Odio mauris posuere blandit iaculis nec gravida phasellus risus suspendisse. Tellus fusce amet vehicula aliquet faucibus amet vivamus hac. Ultrices aliquam pellentesque amet odio velit. Viverra tristique amet mauris enim sed diam purus in. In tristique tristique adipiscing vel nisl a purus tincidunt. Ultrices orci posuere nec quisque. Faucibus metus at non vestibulum. Non auctor magna parturient massa. Porta amet phasellus nibh amet amet nisl.</p>
            <p>Lorem ipsum dolor sit amet consectetur. Justo lacus diam integer elit interdum maecenas tincidunt. Habitant eget luctus tristique cras nunc mauris ultrices sagittis libero. Odio mauris posuere blandit iaculis nec gravida phasellus risus suspendisse. Tellus fusce amet vehicula aliquet faucibus amet vivamus hac. Ultrices aliquam pellentesque amet odio velit. Viverra tristique amet mauris enim sed diam purus in. In tristique tristique adipiscing vel nisl a purus tincidunt. Ultrices orci posuere nec quisque. Faucibus metus at non vestibulum. Non auctor magna parturient massa. Porta amet phasellus nibh amet amet nisl.</p>
        ',
        ]);

        Article::create([
            'title' => 'Pendidikan di Era Digital',
            'category_id' => 3,
            'author_id' => 3,
            'cover_image' => 'uploads/articles/pendidikan_era_digital.jpg',
            'content' => '
            <p>Lorem ipsum dolor sit amet consectetur. Justo lacus diam integer elit interdum maecenas tincidunt. Habitant eget luctus tristique cras nunc mauris ultrices sagittis libero. Odio mauris posuere blandit iaculis nec gravida phasellus risus suspendisse. Tellus fusce amet vehicula aliquet faucibus amet vivamus hac. Ultrices aliquam pellentesque amet odio velit. Viverra tristique amet mauris enim sed diam purus in. In tristique tristique adipiscing vel nisl a purus tincidunt. Ultrices orci posuere nec quisque. Faucibus metus at non vestibulum. Non auctor magna parturient massa. Porta amet phasellus nibh amet amet nisl.</p>
            <p>Lorem ipsum dolor sit amet consectetur. Justo lacus diam integer elit interdum maecenas tincidunt. Habitant eget luctus tristique cras nunc mauris ultrices sagittis libero. Odio mauris posuere blandit iaculis nec gravida phasellus risus suspendisse. Tellus fusce amet vehicula aliquet faucibus amet vivamus hac. Ultrices aliquam pellentesque amet odio velit. Viverra tristique amet mauris enim sed diam purus in. In tristique tristique adipiscing vel nisl a purus tincidunt. Ultrices orci posuere nec quisque. Faucibus metus at non vestibulum. Non auctor magna parturient massa. Porta amet phasellus nibh amet amet nisl.</p>
            <blockquote>
                <p>Lorem ipsum dolor sit amet consectetur. Justo lacus diam integer elit interdum maecenas tincidunt.</p>
            </blockquote>
            <p>Lorem ipsum dolor sit amet consectetur. Justo lacus diam integer elit interdum maecenas tincidunt. Habitant eget luctus tristique cras nunc mauris ultrices sagittis libero. Odio mauris posuere blandit iaculis nec gravida phasellus risus suspendisse. Tellus fusce amet vehicula aliquet faucibus amet vivamus hac. Ultrices aliquam pellentesque amet odio velit. Viverra tristique amet mauris enim sed diam purus in. In tristique tristique adipiscing vel nisl a purus tincidunt. Ultrices orci posuere nec quisque. Faucibus metus at non vestibulum. Non auctor magna parturient massa. Porta amet phasellus nibh amet amet nisl.</p>
            <p>Lorem ipsum dolor sit amet consectetur. Justo lacus diam integer elit interdum maecenas tincidunt. Habitant eget luctus tristique cras nunc mauris ultrices sagittis libero. Odio mauris posuere blandit iaculis nec gravida phasellus risus suspendisse. Tellus fusce amet vehicula aliquet faucibus amet vivamus hac. Ultrices aliquam pellentesque amet odio velit. Viverra tristique amet mauris enim sed diam purus in. In tristique tristique adipiscing vel nisl a purus tincidunt. Ultrices orci posuere nec quisque. Faucibus metus at non vestibulum. Non auctor magna parturient massa. Porta amet phasellus nibh amet amet nisl.</p>
        ',
        ]);
    }
}
