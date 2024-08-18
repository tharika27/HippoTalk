package com.example.handlingformsubmission;

import java.util.*;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class Existing {
    private static int height;
    private static int weight;
    private static String allergy;
    private static String vaccStat;
    private static String reason;
    private static String complaint;
    private static String symptoms;
    private static String injury;
    private static String meds;


    static Scanner console = new Scanner(System.in);


@RequestMapping
    public static int height() {
        System.out.println("Please enter your current height: ");
        height = console.nextInt();
        return height;
    }

    public static int weight() {
        System.out.println("Please enter your current weight: ");
        weight = console.nextInt();
        return weight;
    }

    public static String allergy() {
        System.out.println("Please state any allergies that you have: ");
        allergy = console.next();
        return allergy;
    }

    public static String vaccStat() {
        System.out.println("Please choose your vaccination status: ");
        vaccStat = console.next();
        return vaccStat;
    }

    public static String reason() {
        System.out.println("Please type your reason for visit: ");
        reason = console.next();
        return reason;
    }

    public static String complaint() {
        System.out.println("Please state any complaints: ");
        complaint = console.next();
        return complaint;
    }

    public static String symptoms() {
        System.out.println("Please state any symptoms you have been feeling for the past few days: ");
        symptoms = console.next();
        return symptoms;
    }

    public static String injury() {
        System.out.println("Please state if you haev had any injuried over the past few months.: ");
        injury = console.next();
        return injury;
    }

    public static String meds() {
        System.out.println("Please choose if you are taking any medications: ");
        meds = console.next();
        if (meds.equals("yes")) {
            System.out.println("Please list the number of medication you are taking: ");
            int numMeds = console.nextInt();
            String current = "";
            for (int i = 1; i <= numMeds; i++){
                System.out.println("Please the medication's name");
                current = " " + console.next();
            }
            return current;

        } else {
            meds = "Currently no medication";
        }
        return meds;
    }
}
