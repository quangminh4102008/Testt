module org.example.javafxreal {
    requires javafx.controls;
    requires javafx.fxml;
    requires java.sql;
    requires java.desktop;


    opens org.example.javafxreal to javafx.fxml;
    exports org.example.javafxreal;
}