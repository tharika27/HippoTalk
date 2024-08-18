package com.example.handlingformsubmission;
 

import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.*;

public class MainController {
    
    @GetMapping("/register")
    public String showForm(Model model) {
        User user = new User();
        model.addAttribute("user", user);
         
         
        return "register_form";
    }

    @PostMapping("/register")
    public String submitForm(@ModelAttribute("user") User user) {
    System.out.println(user);
    return "register_success";
}
     
}

