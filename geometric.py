import turtle
from random import choice
from tkinter.font import names


#fuction to draw a circle
def draw_circle():
    turtle.circle(50)

#function to draw a square
def draw_square():
    for _ in range(4):
        turtle.forward(100)
        turtle.right(90)

    #fuction for draw a triangle

    def draw_triangle():
        for _ in range(3):
            turtle.forward(100)
            turtle.right(120)

        #main function to choose and draw shape

        def main():
            turtle.speed(2)

            print("simple geomatric shape drawing pogram")
            print("1. circle")
            print("2,square")
            print("2 triangle")

            choice = int(input("choose a shape to draw (1-3): "))

            if choice == 1:
                draw_circle()
            elif choice == 2:
                draw_square()
            elif choice == 3:
                draw_triangle()
            else:
                print("invalid choice.Existing the program.")
                turtle.done()
            if_name_== "_main_":
                main()

