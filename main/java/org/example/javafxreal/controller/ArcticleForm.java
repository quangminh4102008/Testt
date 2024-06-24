package org.example.javafxreal.controller;

import org.example.javafxreal.entity.Article;
import javafx.scene.control.Alert;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import org.example.javafxreal.repository.ArticleRepository;

import java.awt.event.ActionEvent;

public class ArcticleForm {
    public TextField textTitle;
    public TextArea textDescription;
    public TextArea textContent;
    private ArticleRepository arcticleRepository = new ArticleRepository();

    public void processSave(ActionEvent actionEvent) {
        Article article = new Article();
        article.setTitle(textTitle.getText());
        article.setDescription(textDescription.getText());
        article.setContent(textContent.getText());
        arcticleRepository.save(article);
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Action success");
        alert.setHeaderText("Article Saved");
        alert.show();
        reset();
    }

    private void proccessReset(ActionEvent actionEvent) {
        reset();
    }
    private void reset() {
        textTitle.clear();
        textDescription.clear();
        textContent.clear();
    }
}
