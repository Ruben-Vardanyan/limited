import tkinter as tk
from tkinter import ttk
import getRates

isos = [rate['iso'] for rate in getRates.rates]
 
def convert_currency():
    try:
        value = float(input_box.get())
        convert_from_iso = combo_currency.get()
        convert_to_iso = combo_convert.get()
        convert_from_rate = convert_to_rate = 0
        for rate in getRates.rates:
            if rate['iso'] == convert_from_iso:
                convert_from_rate = rate['rate']
            if rate['iso'] == convert_to_iso:
                convert_to_rate = rate['rate']
        exchanged = round(value * convert_from_rate / convert_to_rate, 2)
        text = str(exchanged) + " " + convert_to_iso
        final_value.config(text=text) 

    except ValueError:
        print("Please enter a valid number for the amount.")



window = tk.Tk()
window.title("ՓՈԽԱՐԺԵՔԻ ՀԱՇՎԻՉ")
window.geometry("400x300")
window.resizable(0, 0) 




label_header = tk.Label(window, text="ՓՈԽԱՐԺԵՔԻ ՀԱՇՎԻՉ",width=21)
label_header.config(bg="green", fg="white", font=("Arial",25))
label_header.place(x=0,y=0)

label_from = tk.Label(window, text="Փոխարինվող դրամի տեսակը")
label_from.config(fg="black", font=("Arial",10))
label_from.place(x=35,y=50)

combo_currency = ttk.Combobox(window, values=isos)
combo_currency.set("USD")
combo_currency.place(x=40,y=80)

label_from = tk.Label(window, text="Արտարժույթի տեսակը")
label_from.config(fg="black", font=("Arial",10))
label_from.place(x=35,y=110)

combo_convert = ttk.Combobox(window, values=isos)
combo_convert.set("AMD")
combo_convert.place(x=40,y=140)

label_from = tk.Label(window, text="Ներմուծել գումարը")
label_from.config(fg="black", font=("Arial",10))
label_from.place(x=35,y=170)

input_box = tk.Entry(window,font=("Arial",15), highlightthickness=2)
input_box.config(highlightbackground = "green", highlightcolor= "green")
input_box.place(x=40,y=200)

button =  tk.Button(window, text ="Փոխանակել", command=convert_currency,font=("Arial",11) )
button.config(bg="green", fg="white")
button.place(x=270,y=200)


final_value = tk.Label(window, text="")
final_value.config(fg="black", font=("Arial",15))
final_value.place(x=35,y=250)




window.mainloop()