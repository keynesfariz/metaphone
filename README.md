# Metaphone Search in Laravel

Implementing database search using PHP metaphone algorithm with [Laravel](https://laravel.com/) as the backend and [TailwindCSS](https://tailwindcss.com/) for the styling.

Metaphone converts a string to a key that represents how the string sounds if said by an English speaking person.

For example:
```
echo metaphone('bacon');  // 'BKN'
echo metaphone('beycon'); // 'BKN'
echo metaphone('bekken'); // 'BKN'
echo metaphone('bakon');  // 'BKN'
```

## Used Packages
This app is using these packages and API for seeding the data:
- [fzaninotto/faker](https://github.com/fzaninotto/Faker)
- [jzonta/faker-restaurant](https://github.com/jzonta/FakerRestaurant)
- [unsplash](https://unsplash.com)
