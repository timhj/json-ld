<?php
namespace JsonLd\ContextTypes;
class Offer extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected $structure = [
        'itemOffered' => Product::class,
        'price' => null,
        'priceCurrency' => null,
        'priceValidUntil' => null,
        'validFrom' => null,
        'validUntil' => null,
        'url' => null,
        'itemCondition' => null,
        'availability' => null,
        'eligibleQuantity' => QuantitativeValue::class,
    ];
}
