<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\User
 *
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\Comment
 *
 */
	class Comment extends \Eloquent {}
}

namespace App{
/**
 * App\Post
 *
 */
	class Post extends \Eloquent {}
}

namespace App{
/**
 * App\Category
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Post[] $posts
 */
	class Category extends \Eloquent {}
}

namespace App{
/**
 * App\Tag
 *
 */
	class Tag extends \Eloquent {}
}

