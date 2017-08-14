public class Tutorial2 {
    public static void main(String[] args) {
        String input = "Uvuvwevwevwe Onyetenyevwe Ugwemuhwem Osas";
        String[] temp = input.split(" ");
        for (int i = 0; i < temp.length - 1; i++) {
            System.out.println(" " + temp[i] + " " + temp[i].length());
        }
    }
}