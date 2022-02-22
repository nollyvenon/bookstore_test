## Package used for Auth
Laravel Passport
Installed Passport via artisan using: php artisan passport:install

I created a user with:
php artisan tinker
 DB::table('users')->insert(['name'=>'john azuka','email'=>'johnazuka@gmail.com','password'=>Hash::make('johnazuka')]
);
and receive the Client ID and secret, this is then used as encryption keys

An oauth token is generated using this URL http://127.0.0.1:8000/oauth/token
Parameters in the Body are:
Accept: application/json 
grant_type: password
client_id: generated clientID
client_secret: generated_client_secret
username: your email
password: your password

The API are consumed using The Bearer token(Authorization) and Accept as application/json 
This provides the client secret and ID for authenticated while testing the API

## APIs created
List of APis created can be viewed using this artisan command: php artisan route:list


