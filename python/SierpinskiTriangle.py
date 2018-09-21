import png

size = 1875
modulo = 5

print("Generiere Dreieck modulo",modulo,"mit",size,"Zeilen.")

# (2*size)x(2*size)-Matrix mit allen Einträgen 255 (weiß)
pngArray = [[255 for x in range(2*size)] for y in range(2*size)]


row = [1] # erste Zeile (oben)
for i in range(size):
    # aktuelle Zeile in das Array schreiben
    for j in range(len(row)):
        # Für jeden Eintrag ungleich 0 werden 4 Pixel gefärbt
        if row[j] != 0:
            color = int( 255 - 255 * (row[j]/(modulo-1)) )
            pngArray[2*i][size-i-1+2*j] = color
            pngArray[2*i+1][size-i-1+2*j] = color
            pngArray[2*i][size-i+2*j] = color
            pngArray[2*i+1][size-i+2*j] = color
    # nächste Zeile im Pascalschen Dreieck
    row = [(x+y)%modulo for x, y in zip([0]+row, row+[0])]


# pngArray als Grafik speichern
f = open("triangle.png","wb")
w = png.Writer(2*size, 2*size, greyscale=True)
w.write(f, pngArray)
f.close()

print("fertig.")
