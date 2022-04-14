import java.util.Scanner;
public class Homework1//#endregion{

    public static void main(String[] args) {
        int score;
    
    Scanner keyboard = new Scanner(System.in);
    System.out.println("Enter your mark");
    score=keyboard.nextInt();

    if(score>=50){
        System.out.println("You passed examination");
    }
    else{
        System.out.println("You fail examination");
    }
    }

}