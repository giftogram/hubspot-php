<?php

/*
 *  To create a HubSpot contact, contact data must be passed in via properties
 *  http://developers.hubspot.com/docs/methods/contacts/create_contact
 */
$this->hubspot->contacts()->create([
  ['property' => 'firstname', 'value' => 'Phillip'],
  ['property' => 'lastname', 'value' => 'Roth'],
  ['property' => 'email', 'value' => 'philliproth@gmail.com'],
  ['property' => 'company', 'value' => 'Giftogram'],
]);
