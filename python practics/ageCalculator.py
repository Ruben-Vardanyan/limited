import tkinter as tk
from tkinter import ttk
from datetime import datetime
#pip install tkcalendar
from tkcalendar import  DateEntry

def calculate_age():
    # Get the selected date of birth from the combobox
    dob_str = date_entry.get()
    dob = datetime.strptime(dob_str, "%m/%d/%y")

    # Get today's date
    today = datetime.now()

    # Calculate the age
    age = today.year - dob.year - ((today.month, today.day) < (dob.month, dob.day))

    # Display the age in a label
    result_label.config(text=f'Դուք {age} տարեկան եք')

# Create the main window
window = tk.Tk()
window.title("ՓՈԽԱՐԺԵՔԻ ՀԱՇՎԻՉ")
window.geometry("400x300")
window.resizable(0, 0) 

label_header = tk.Label(window, text="Տարիքի Հաշվիչ", width=21)
label_header.config(bg="blue", fg="white", font=("Arial", 25))
label_header.place(x=0, y=0)

label_from = tk.Label(window, text="Նշեք Ձեր տարիքը")
label_from.config(fg="black", font=("Arial", 10))
label_from.place(x=135, y=80)

date_entry = DateEntry(window, width= 16, background= "blue", foreground= "white", year=2005, month=3, day=16)
date_entry.place(x=135, y=110)

calculate_button = tk.Button(window,width= 16, background= "blue", foreground= "white", text="Հաշվել Տարիքը", command=calculate_age)
calculate_button.place(x=135, y=150)


result_label = tk.Label(window, text="")
result_label.config(fg="black", font=("Arial", 10))
result_label.place(x=135, y=190)

window.mainloop()
