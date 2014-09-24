<?php

namespace HOS;

/**
 * Person class for HOS
 *
 * @author ebarker1
 */
class Person {

    //properties
    // – a positive integer
    protected $PersonId;
    protected $LastName = "";
    protected $FirstName = "";
    protected $Gender = array("Male", "Female");
    protected $BirthDate = "";
    protected $Address1 = "";
    protected $Address2 = "";
    protected $City = "";
    protected $StateProvince = "";
    //Zip/Postal code – validate with regex
    protected $PostalCode = "";
//– USA or Canada       
    protected $Country = array("USA", "Canada");
    //number (complete, with area codes and such) – validate with regex
    protected $Phone = "";
    //– validate with regex
    protected $Email = "";

    //constructor and destruct
    function __construct($personid) {
        //null personid is a new person else existing person
    }

    function __destruct() {
        
    }

    //methods
//    public function __set($name, $value) {
//        $this->data[$name] = $value;
//    }
//
//    public function __get($name) {
//        if (array_key_exists($name, $this->data)) {
//            return $this->data[$name];
//        }
//    } 
    public function getPersonId() {
        return $this->PersonId;
    }

    public function setPersonId($PersonID) {
        $this->PersonId = $PersonID;
    }

    public function getFirstName() {
        return $this->FirstName;
    }

    public function setFirstName($FirstName) {
        $this->FirstName = $FirstName;
    }

    public function getLastName() {
        return $this->LastName;
    }

    public function setLastName($LastName) {
        $this->LastName = $LastName;
    }

    public function getGender() {
        return $this->Gender;
    }

    public function setGender($Gender) {
        $this->Gender = $Gender;
    }

    public function getBirthDate() {
        return $this->BirthDate;
    }

    public function setBirthDate($BirthDate) {
        $this->BirthDate = $BirthDate;
    }

    public function getAddress1() {
        return $this->Address1;
    }

    public function setAddress1($Address1) {
        $this->Address1 = $Address1;
    }

    public function getAddress2() {
        return $this->Address2;
    }

    public function setAddress2($Address2) {
        $this->Address2 = $Address2;
    }

    public function getCity() {
        return $this->City;
    }

    public function setCity($City) {
        $this->City = $City;
    }

    public function getStateProvince() {
        return $this->StateProvince;
    }

    public function setStateProvince($StateProvince) {
        $this->StateProvince = $StateProvince;
    }

    public function getCounty() {
        return $this->Country;
    }

    public function setCountry($Country) {
        $this->Country = $Country;
    }

    public function getPostalCode() {
        return $this->PostalCode;
    }

    public function setPostalCode($PostalCode) {
        $this->PostalCode = $PostalCode;
    }

    public function getPhone() {
        return $this->Phone;
    }

    public function setPhone($Phone) {
        $this->Phone = $Phone;
    }

    public function getEmail() {
        return $this->Email;
    }

    public function setEmail($Email) {
        $this->Email = $Email;
    }

}
