package com.example.handlingformsubmission;

import java.util.*;


import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class NewUser {

    static Scanner console = new Scanner(System.in);
    public static String firstName;
    public static String lastName;
    public static String phoneNum;
    public static String DOB;
    public static String address;
    public static String city;
    public static String zipCode;
    public static String state;
    public static String country;


    @RequestMapping
    public static String firstName() {
        System.out.print("Please enter your legal first name: ");
        firstName = console.next();
        return firstName;

    }

    public static String lastName() {
        System.out.print("Please enter your legal last name: ");
        lastName = console.next();
        return lastName;
    }

    public static String phoneNum() {
        System.out.print("Please enter your home phone number: ");
        phoneNum = console.next();
        return phoneNum;
    }

    public static String DOB() {
        System.out.print("Please enter your birthdate in DD/MM/YYYY format: ");
        DOB = console.next();
        return DOB;
    }

    public static String address() {
        System.out.print("Please enter your street address: ");
        address = console.next();
        return address;
    }

    public static String city() {
        System.out.print("Please enter your current city: ");
        city = console.next();
        return city;
    }

    public static String zipCode() {
        System.out.print("Please enter your zip code number: ");
        zipCode = console.next();
        return zipCode;
    }

    public static String state() {
        System.out.print("Please enter your current state of residence: ");
        state = console.next();
        return state;
    }

    public static String country() {
        System.out.print("Please enter current country: ");
        country = console.next();
        return country;
    }


}