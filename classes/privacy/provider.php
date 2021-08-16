public static function get_metadata(collection $collection) : collection {

    $collection->add_external_location_link('rumbletalk_client', [
            'email' => 'privacy:metadata:rumbletalk_client:email',
            'username' => 'privacy:metadata:rumbletalk_client:username',
        ], 'privacy:metadata:rumbletalk_client');

    return $collection;
}
