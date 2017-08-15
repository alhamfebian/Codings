public class TestTriangle {
    public static void main(String[] args) {
        Triangle a = new Triangle();
        System.out.println("Luasnya adalah " + a.getLuas());

        Triangle b = new Triangle(3,4);
        System.out.println("Luasnya adalah " + b.getLuas());

        a.setAlas(5);
        a.setTinggi(6);
        b.setAlas(5);
        b.setTinggi(6);

        System.out.println("Luasnya adalah " + a.getLuas());
        System.out.println("Luasnya adalah " + b.getLuas());
    }
}

class Triangle {
    private int alas;
    private int tinggi;
    private String color;

    public Triangle () {
        alas = 3;
        tinggi = 3;
        color = "red";
    }
    public Triangle (int a, int b) {
        alas = a;
        tinggi = b;
        color = "blue";
    }


    public int getLuas () {
        return (alas * tinggi) / 2;
    }
    public void setAlas (int a) {
        alas = a;
    }
    public void setTinggi (int b) {
        tinggi = b;
    }
}