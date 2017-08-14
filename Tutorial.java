public class Tutorial {
    public static void main(String[] args) {
        String input = "telolet";
        String spec = "om";
        int counter = 0;
        String[] test = input.split(" ");
        for (int i = 0; i < test.length; i++) {
            if (test[i].length() == spec.length()) {
                counter++;
            }
        }
        System.out.println(counter);
    }
}
