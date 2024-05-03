<?php

// Ternary operator
$color = isset($favoriteColor) ? $favoriteColor : 'blue';

// Null coalescing operator
$color = $favoriteColor ?? 'blue';

// Ternary operator
$color2 = isset($favoriteColor) ? $favoriteColor : (isset($secondFavoriteColor) ? $secondFavoriteColor : 'blue');

$color2 = $favoriteColor ?? $secondFavoriteColor ?? 'blue';
