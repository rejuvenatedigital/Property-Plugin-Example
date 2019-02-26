<?php namespace Rejuvenate\Properties\Models;

use Model;

/**
 * Property Model
 */
class Property extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'rejuvenate_properties_properties';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Behaviours Implemented
     */
    public $implement = [
        '@RainLab.Translate.Behaviors.TranslatableModel',
        '@Rejuvenate.Translate.Behaviors.TranslatableModel'
    ];

    /**
     * @var array Jsonable fields
     */
    public $jsonable = ['content'];

    /**
     * @var array Translated fields
     */
    public $translatable = [
        'name',
        'content',
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
