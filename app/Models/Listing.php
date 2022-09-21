<?php
  namespace App\Models;
  class Listing{
    public static function all(){
      return [
        [
          'id' => 1,
          'title' => 'Listing One',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis augue nec est gravida blandit at et tellus. Phasellus molestie ornare maximus. In eget tellus faucibus, blandit risus in, varius.'
      ],
      [
          'id' => 2,
          'title' => 'Listing Two',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis augue nec est gravida blandit at et tellus. Phasellus molestie ornare maximus. In eget tellus faucibus, blandit risus in, varius.'
      ]
      ];
    }
    public static function find($id){
      $listings = self::all();
      foreach($listings as $listing){
        if($listing['id']==$id){
          return $listing;
        }
      }
    }
  }