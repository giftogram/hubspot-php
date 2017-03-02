<?php

/*
 *  To create a HubSpot contact, contact data must be passed in via properties.
 *  After the request, the HubSpot contact object is returned.
 *
 *  http://developers.hubspot.com/docs/methods/contacts/create_contact
 */
$createContact = $this->hubspot->contacts()->create([
  ['property' => 'firstname', 'value' => 'Phillip'],
  ['property' => 'lastname', 'value' => 'Roth'],
  ['property' => 'email', 'value' => 'philliproth@gmail.com'],
  ['property' => 'company', 'value' => 'Giftogram'],
]);

/*
 * To retrieve a single HubSpot contact, call contacts()->getByEmail
 */
$contact = $this->hubspot->contacts()->getByEmail(
  $createContact->data->properties->email->value
);
