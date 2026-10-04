# Accounts and User profiles

## User
User Account data - for authentication and who perform the actions
    

## Person / People / Profile
Used to store data about a person to make addressing to people easy without needing to create an account for said person. Ie. Boss / CEO

## Department
Holds the details of department, can be used to assigned an item to

# Products Section

#### General hierarchy of products are as follow:

` Category > Items > Variants > Stocks / Asset `



## Category
Used to organize / categorize different items

## Items
Holds the actual Details about the item such as names, description

## Variants
Stores different types of said Item, if item only have one variant then there will only be one variant record for it

- id
- name
- type: 

## Stocks

## Movement

## Assets
Used to define a unique item / Asset, intended for products with unique asset tag ie Laptops, System Unit
- id
- asset_tag
- qr_code
- status
    

## Attributes
Holds the attributes. Can be used to tailored to diff system from the system itself

- id
- key
- name
