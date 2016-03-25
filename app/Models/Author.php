<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'authors';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'phone'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function books()
    {
        return $this->hasMany(__NAMESPACE__ . '\\Book', 'author_id');
    }
}
