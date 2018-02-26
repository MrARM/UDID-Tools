# Apple UDID Tools
[![Build Status](https://travis-ci.org/MrARM/UDID-Tools.svg?branch=master)](https://travis-ci.org/MrARM/UDID-Tools)
Calculates apple UDIDs.

## Features
Feel free to propose new ideas for the project. Future changes might include making a profile based check.

* UDID Calculation

## Example
### UDID Calculation
```
use \mrarm\UDID\Tools;
$UDID = Tools::CalculateUDID("DMPPF84LFK11", "6552664192520", "5c:f5:da:98:fc:e4", "5c:f5:da:98:fc:e5");
echo($UDID);
```
Returns 
`efe72ce274fb3deaea3568544e510b182f4a8b85`
