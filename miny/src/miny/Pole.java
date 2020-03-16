/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package miny;

/**
 *
 * @author Slith
 */
public class Pole {

    int x, y, x_max = 8, y_max = 8;
    int[][] array = new int[8][8];

    public void naplneniMin() {
        for (this.x = 0; x < x_max; x++) {
            for (this.y = 0; y < y_max; y++) {
                array[x][y] = 0; //deklarace pole
            }
        }
        for (x = 0; x < 15; x++) { // zvyšení čísla = větší šance na miny
            array[(int) (Math.random() * 8)][(int) (Math.random() * 8)] = 9; //náhodné umístění min
        }
    }

    public void detekce() {
        for (this.x = 0; x < 8; x++) {
            for (this.y = 0; y < 8; y++) {
                //horni patro
                if(array[x][y] == 9){
                if (x - 1 >= 0 && y - 1 >= 0 && array[x - 1][y - 1] != 9) {
                    array[x - 1][y - 1] += 1;
                }
                if (y - 1 >= 0 && array[x][y - 1] != 9) {
                    array[x][y - 1] += 1;
                }
                if (x + 1 < x_max && y - 1 >= 0 && array[x + 1][y - 1] != 9) {
                    array[x + 1][y - 1] += 1;
                }

                //střed
                if (x - 1 >= 0 && array[x - 1][y] != 9) {
                    array[x - 1][y] += 1;
                }
                if (x + 1 < x_max && array[x + 1][y] != 9) {
                    array[x + 1][y] += 1;
                }

                //dolní patro
                if (x - 1 >= 0 && y + 1 < y_max && array[x - 1][y + 1] != 9) {
                    array[x - 1][y + 1] += 1;
                }
                if (y + 1 < y_max && array[x][y + 1] != 9) {
                    array[x][y + 1] += 1;
                }
                if (x + 1 < x_max && y + 1 < y_max && array[x + 1][y + 1] != 9) {
                    array[x + 1][y + 1] += 1;
                }
            }
            }
        }
    }

    public void show() {
        for (this.x = 0; x < 8; x++) {
            for (y = 0; y < 8; y++) {
                if (array[x][y] == 9) {
                    System.out.print(" X "); //vypsání pole
                } else {
                    System.out.print(" " + array[x][y]+ " ");
                }
            }
            System.out.println("");
        }
    }
}
