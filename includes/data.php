<?php

$users = [
    [
        'id' => 1,
        'name' => 'Ana Martínez',
        'email' => 'ana@example.com',
        'password' => password_hash('password123', PASSWORD_DEFAULT), // Para login
    ],
    [
        'id' => 2,
        'name' => 'Carlos Gómez',
        'email' => 'carlos@example.com',
        'password' => password_hash('qwerty456', PASSWORD_DEFAULT),
    ],
    [
        'id' => 3,
        'name' => 'Laura Rodríguez',
        'email' => 'laura@example.com',
        'password' => password_hash('abc12345', PASSWORD_DEFAULT),
    ],
    [
        'id' => 4,
        'name' => 'David Torres',
        'email' => 'david@example.com',
        'password' => password_hash('pass7890', PASSWORD_DEFAULT),
    ],
    [
        'id' => 5,
        'name' => 'María López',
        'email' => 'maria@example.com',
        'password' => password_hash('mypass321', PASSWORD_DEFAULT),
    ]
];

$posts = [
    [
        'id' => 1,
        'title' => 'Bienvenidos al blog',
        'description' => 'Este es el primer post de prueba.',
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgeWeiYOPPaiGQPQAvMM9KGjzg6nX6W7WRXA&s',
        'author_id' => 1,
        'created_at' => '2025-03-28 10:00:00',
        'status' => 'published'
    ],
    [
        'id' => 2,
        'title' => 'Tips para programar en PHP',
        'description' => 'Consejos útiles para escribir mejor código en PHP.',
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8Mwj86vQvIs2M2-xjGmGtbTqBbrqRqsReBg&s',
        'author_id' => 2,
        'created_at' => '2025-03-28 11:30:00',
        'status' => 'published'
    ],
    [
        'id' => 3,
        'title' => 'Mi experiencia con Laravel',
        'description' => 'Compartiendo lo aprendido trabajando con Laravel.',
        'image' => 'https://via.placeholder.com/600x400',
        'author_id' => 3,
        'created_at' => '2025-03-28 13:00:00',
        'status' => 'draft'
    ],
    [
        'id' => 4,
        'title' => 'Aprender JavaScript desde cero',
        'description' => 'Recursos y estrategias para aprender JS.',
        'image' => 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAQDxUPEA8WFRAVFRUYFRYXFxcXFhcWFxUWFxkWFhcYHiggGBslJxYXIjEiJSkrLi4uFx8zODMsNygtLisBCgoKDg0OGxAQGzAmICY3Mi01MzUrKzMtNy8wNzEtMCsxLS0xNy0vMi8tMDU3Ly4tKy0tLy8tLS8tLzUwLS0tLf/AABEIAKgBLAMBEQACEQEDEQH/xAAcAAADAAMBAQEAAAAAAAAAAAAAAgMEBQcGAQj/xABNEAABAwIDBQQDCgoJAwUAAAABAAIDBBEFEiEGBxMxQVFhcYEUIjIzNUJyc4KRkqGxCBUjUmJ0s8HR0iQ0U5OissPh8BeDwkNUVWNk/8QAGwEBAAIDAQEAAAAAAAAAAAAAAAQFAQIDBgf/xAA3EQEAAgECBAIHBwQBBQAAAAAAAQIDBBEFEiExQWETMlFxkdHwBhRygaGxwSI04fEzIyQ1QsL/2gAMAwEAAhEDEQA/AOohA4QUagdqCjUDhBQIHCCjUDhB9QCAQCAQCAQCAQCAQCAQCAQCAQCAQKUCFAhQTKBCgm5AjkEygVBMIHCCjUDtQUagcIKBA4QUagcIPqAQCAQCAQCAQCAQCAQCAQCAQCAQCBSgRyBCgmUCFBNyBHIJlAqCbUFAgdqBwgo1A4QUCBwgo1A4QfUAgEAgEAgEAgEAgEAgEAgEAgEAgEHwoJlAhQTKBCgm5AhQTcgRAjUFAgdqCjUGr2rxh1DQzVbWB7og0hpJAN3tbqRy9pB5zd1vAlxSokgfTMiDIs4LXudf12ttYgW9pB0FqDlG0e+J9NWTU8NHHLHE8sDzI5pcW6O0DTyOYeSD227za0YrSGcxiORkjmPYHFwBsHNIJAuCHDzBQareTt7UYRNE1lIyWKVjiHue5pD2OAc2waRycwjxPYg3m77ar8a0QqSwRyCR7JGA5g1zSCNSBe7XNPmg2m0WKto6OarcLiKNz7crkDRvmbDzQeA2D3nVWJ1zaX0KNjMr3yPEjnFrWjoMouSS0c+qD3e1WNNoKKascL8JhLW3tmedGMv0uSB5oOSM36Tggvw+PLcZssri63WwLNSg7bDK17WvYQWuALSORBFwQg120mP0+H0zqqpdaNtgABdznHkxg6uP8SbAEoOQYnvzqMx9Ho4o2X0Mr3PcR3huUA91z4oMvZbfNU1FXDTS0kLhNNHHmje9mXiPDc1jmzWve1xyQdncQBcmwHNByzanfPTwPMVDD6SQbGQuyRX/AELAmTx0HYSg8wzffiGbWlpi3sAlB+tnP3IOpbL7WOrcKOImARuDZjw82YXiLh7VhocvZ1Qc2/67VFrnD4gPlnfyIKU2/eUn18OjLeuSc38rx2QdQ2P2tpsUgM1OXAtIbJG8WexxFxe1wQehBINj1BADyu8beVLhVY2ljpWSh0DJS5zy0guklZawaf7P7UHsdk8XNbQwVbmBhlYHFoNwLk6X6oOU1O/CoY9zfxfEQ1zhfiuHIkX9juQJFv1mvrh0ZHdO4H6eGUHQdltu6XEoJZIA5s0TC58L7Bw0JBBGjmm1rjzsg5w3flUEA/i+LX/7n/yIA77qj/4+L++f/IgzME3vT1NXBTGijaJpooy4SuJAe8NuBl1tdB1dyBHIJuQKgmEFAgdqCgQeY3oe81V8Rn7ViDnu4X+vz/q3+qxB1va7GRQ0E9X8JkZyDtkd6rB5uIQcD2E2YfiPpp9p0VK9zSes7yTHfxySIN3uKxvg4i6mcfydVHYfKR3e36WmQfQg6Pvowb0nCXyAflKZwmHxRdsn+Fzj80IPF/g+4tlqKiicdJGNlYP0ozlf5kOZ9RB6Pf3i3Cw+OlB9aolFxfXhxWe7/Fwx5oMT8H/BslPPXOGsr+Gz4kftEeLiR8xBD8IHG7RwYe06vPGlH6LbtjB7i7Mf+2g8Bjuy7oMHoa+2s7pc+nR/rQk/NY4/OQdj3L416ThTI3G8lMTC74rQDGfqlo+aUHnPwh2v4VGf/S4koPZnLG5b99g/7UGo3J41hlPxIqrhx1b3gxyyAWLMrQI2vOjDe5tpfMOfQOw1uz9FUPjmkpo3SRvZJHIGgPa5rg5pD262uBpex63QeE38bQPgo46ON1nVRdxCOfBZbM35xc0HuzDqg8dui2BixDPV1YJpo35GRgkCR4AJLiNcjbjQcze+gIIdkdsZhZZw/wAW02Ts4Mf03te/egSTBYKHDKinpmZIRFUODbk2L2ucbE62uSg4Puaja7GKdrmhwyS6EAj3F3QoOkb8cMomYaJTFGyqEsYhLQ1r3XcM7dNXNy5jbtAQec/B6ik9LqngHhCFjXHpnLyWjxsH/Sgwd/vvtH+pxft6lB1jdd7y0fyI+8oPz/sswOxqna4AtNY0EEXBHF5EHmg7lvI2XoJMMqZXU0TJIoZJI5Gsa1zXMaXNGYWJBIAI5G6Dj+56RwxqBrRdr2TskHMGPgvdY92ZrEHeTszQf+wp/wC5j/lQfnDdzCyTFKNkjQ9jpLOa4BzXDhvOoOhQfoyPAKJjg9lHA1zSC1wiYCCDcEEDQhBnOQI5BNyBUEwgoEDtQUag8vvScBg1Vc/BjHmZowPvQc/3Cj+nVB//AD/fKz+BQbPf3jWlPQNPMmeTXoLsjB7QSZD80IMHddtvhuF0bo5+Lx5JXPfljzNAADWNBuL6C/i4oPB1mIshxF1XRZuGyo40OYZTbPnDCOg5t8EH6npZoqyla8etDPED4skby+goPzXgEjsIxxjXkgQVJiee2NxMeY92Vwf9CDb77MUdU4uYGXcKdjImtHWV9nut3nPG3xag7rsrhDaGhgpBb8lG0OI6v5vd5uLj5oPzXt1jIxDFJ5y8iEycNjhraFhyBzR1vZz7drkHv9tNvsIrMKfQQtmaWsZwLxWa10ViwXvoPVy+BKDS7jMb4GJGmcbMqmFo+VjBe36RxB9CDuuOYPBWwOpqmMPifzHIgjUOaRq1w6EIOKbUbmKqEOkoZRURjXhvsya3YD7Dz9XwQec2I23qsKnaxz3mlDss0D72aL2cWA6xvbroLXtYjsD1f4QjCamjk+A6GUA9Lh7Cf8wQer3DVbHYSYmn14p5Q8dfXIe0+BDvsPYg6Og1+0P9TqPkJf2bkH5Y2UoKuoqWQ0Ti2pc12UtkMRsGku9cEW0ugtjNNUQ1nBxU1BewjPeTPJwzreJ8hc0g9Omh6g2D9H7BUdBFQRnDQPRnjPm5ve7k4yE65wRlIPLLbS1kHIN/vvtH+pxft6lB1jdd7y0fyI+8oPzfC+Ztbmps3pAnJiyjM7PxDlytINzfpZB6vEKPafEGiCeKrkjuDle1kLLjkXaMDrc9boOjbsN3hw3NVVLmuq3tygN1ZEwkEgH4TjYXPLSw6kh0AoPy9uw99qH5T/Seg/TJQI5AjkE3IEQIEFAgcINDt5jctBQPq4Q0vY+IWcCWkOka0g215EoOObZbxKnEYBTvjZDCHBzw0lxeW+zdzuTQdbW5ga6IOhblNm5KWnlrJ2lj6jIGNdoREzMQ4g8sxcTbsaO1By3arEXYpisj4zfjTNih6jICI47dx9r5xQdnj3RYRYB0MhNhc8aUXPU2DtEHP97mw9PhraeakY5sL3PjkDnuf69g5li4m1wJPqhB7ncRjfHw51K5130ryBrrwpLvYfI8RvgwIPF7/MEEVeyrA9Spjs75SKzTc97Sz6hQavdhQPxHG2TS+tkc6plJ1u5p9X/G5p+aUHaN52Oeg4VPK02le3hR9ueT1bjwGZ3zUHE90+ycWJ1j2TtJpooszw1zmkucQ1gzN1HJ5+ag6z/0gwb+wk/v5f5kHENoaN+FYrIyK4dTTh8N+rQRLFc9dC0Ht1Qdf3jbeTUcOH1tE5piqA9zmPF2vYWRuANrEOF+Y5a8+SDTt36fk9cOPFt/bDJfxyX+xBziioanG8ReGMvJPIXyloOSJrj6znH4IA5X1JA5koO+byNjvxlQiGIgVEJzQk8iQLFjj0Dh16ENPRBwLBsZr8Gq3GO8M49WWKRpyuAOgey4uOocD10Nibh7eTfjWZbNooA+3tFzyL9uXT/Mg91shjk9fgEtVUODpXsqwS0BrbNztaAB0AA7UHJtyvv1T/Em/YuQdW3wbH+n0fpELL1dOC5tuckfN8fedLt7xb4RQc83LbY+iVPoMz/6NUOGQk6MmOg8A/QeIb2lAb/vfaP9Ti/b1KDrO673lo/kR95QcB2S9+6f9db+2QfqVyBCgQoPy7uw99qH5T/Seg/TRQI5AjkE3IEQIEFAgcIFqqSOZhimjbJG7m17Q5p66g6IMCh2Uw6F4kioIGPHJwiZcd4NtPJBuy0EEEXB0IOoIPMHtQYFLs7Qxua+OhpmPaQWubBE1zSORaQ24Pgg24QSraCGoZw54WSsuDlkY17bjkbOBF0CYdg1LTEup6WGFzgA4xxsYSByBLQLjUoKYjhlPUtDainjma03aJGNeAbWuA4Gx1Iv3oEw7BqWmJdT0sMJcAHGONjC4C9gS0C/M/SgfEcMp6lobUQRzNabgSMa8A2IuA4GxsSL96D5h2FU1Nm9Hp4oc1s3DjYzNa9r5QL2ufpQZiDW12AUU7+JPRwSyWAzSRRvdYchmcCbIL/iun4Ip/R4uABYRZG8MDsDLW69iDUO2Ewkm/4spr/JM+6yDc0NBDAzhwQsiZ+axrWN+hosgyUGDieD01U3LU08UzRyEjGvt4Zhog1sOw+EsOZuG01xy/IsP3hBvOAzJw8jclsuWwy5bWtblbuQYFFs9QwPEkNFTxyC9nshjY4XFjZzQCEGzQad2yuGkknDqUkm5JgiuSdbn1eaDIr8Co6h4knpIJXhoaHSRMe4NBJDQXAm1yTbvKDLpaaOJgjiY1kbRZrGANa0dgaNAEGvh2aoGPErKCnbIHZg8Qxhwde+YODbg96DZlAhQIUGop9naGJ7ZIqGnY9urXMhia5pta7SG3HPog2BQTcgRyCbkCoJhBQIHCCgQOEFAgdqCgQO1BhY1WOhja5lrl1tRfSxP7lV8V1mTS4ovTbeZ26+6Z/h30+KMltpYjq2ra3O6JpZa+nZ5G6hW1nEsdfSXxxNe/T/AH/DrGLBadomd2bS4gJYnPaLOaDcHobX8wrHTa+uowTkr0mO8ebjkwzS/LLX0tfVytzMawgG3Zrz6nvVVptbxHUU58dazHb66pF8WCk7WmWVX4i+GNmZoMrhqOgItfl4qdrOIZNLhpzV3vbw8PNyxYYyWnaekFifWZmlzG5SRmAtcAnU81pjvxOLVm9a7TMb7d4j4/Nm0YNp2md3zEq+VkwijDTcC1x1JPW/ctddrtTj1NcGGI6xHf29fPyMOGlqTeyUmJ1ERHGiGU9R/G5C5X4lrNNMfeMcbeX+5/hvGDFf1LdWXiNeWwCWOxuRa46G6m67XTj00Z8O077d/NxxYebJyWQpp6x2VxYzIbG+l8p81HwZuJXmtprXlnb4fF0vTBG8bzu3KvERqsQxUtfwom5pOvYO7vVPreJ2pl9BgrzX+vryScWCJrz3naHymlq87eIxuQnUi2mncVjT5OI+lrGakcs99vD9S9cHLPLPVGTEKgzPijDTlJ5joLdb96j31+svqr4cMVnb2+zp5+beuHFGOL336stk07YZHyhoe0Etty0HXVTa5tVTTZMmaIi0bzG3bpHvcprjm8RXswYsQqnRmUNYWC99NdOel1X4tdxDJi9NWtZr+vTv4u9sOGLcszO7Y4fiAkiMhGXLfN2aC91aaLX11GCctum3f8uqPlwzS/LDBGJVExPAjGQdT/ubeSro4jrNVafutI5Y8Z/3HwdpwY8cf9Seq1BijjJwZm5X9Oy/Yu+j4lknN6DUV5bNcmCOXnpO8NqrpFKUHwoJuQTKCZQI5AjkE3IEKBAgoEDhBQIHagoEDtQUagdqDVbT+5N+P/4uVD9of7evv/iUzRevPu+TZQuAiaTyyi/hZXGOYjDEz22j9kW3rS0WBD1ZiPZy6fQ5ec4PE8me0ert8/4TtV3pHiTCIqhzDwXta3NqD22H6J7lx4Zj1t8U/d7REb+Pt+Ets9sUW/rj6+LbV+HcaNoc60jRz6Xtr5K81mg+9Ya1tO1o8fPx/JExZvR2mY7MCKtnp3tjm9Zp5HnpyuD181W49ZqtFkri1PWs9p/Tv5efV3nFjy1m1Okmrv69H4N+9y21n/lcXuj/AOmMf9vb69jNx5w4Dr9bW8bhWHF5rGktzeO23v3cdNE+kjZq5wRQMv8AnfZd1lT5YmOFU39u/wCspVdp1EsvDoqq0Z4jeFZunXL2ez+9TdDi1+2O03jk6dPHb2dv5cctsO8xtO7cq+RGgwYj0qTN7RzW+tr+5eZ4XMRrsvP63Xb4/wCk/Uf8Nduz0C9MgPMhkpq5BE4NdrqeVtO49y8lFc9uIZYwTEW8/Z08pWO9IwV546NnKyUU0glcHOyu1HK1vAK3yVz10OSM8xNtp7ezb3QjRNJy15O3RpopZ205y24RJBI9rXmqHFl1ePRf0bejmZiZ8evdMtXHOXr3/RsXQsbRO4RuCLk9TqL6dOVvJWs4sdOGW9DO8TG+/wC/15I8WtOojmZGzxHAFud3X8bn91lJ4LNfuldvbO/x+Tnqt/SywsY1qog32vVv9a/8VA4n/Vr8UU79P33+btg/4bbt+vSoJSg+FBN6CZQTKBCgRyCbkCFAjUFAgcIKNQO1BQIHCCgQO1Bi4tQmZgaHAWdfXwI/eq/iWinV44pE7bTv+kx/Ltgy+jtvswjg8zhlfUEs7AD/ABUCeE6nJHJkzb19m3+Xb7xSOtadWyio2siMbNAQde8jmVa49LTFh9Fj6R8/FGtkm1uaWsgwedgsyfKO4FVGHhOqwxy4820e5Ktqcdp3mrJmoJi1lp7PaCCfzrnr9Cl5dFqbUpy5drV33nbvu5Vy0iZ3r0lFmESOeHzS5svIAf8ANPJcacKy3yxk1OTm28Nvr9m86isVmuOuymIYY+SUSskDSAANNbgnX7VvreG5c+eM2O/LMRt29/za4s9aU5ZjdNuCuc4GaYvA6f73WkcHvktFtTkm23h2+vy2bfeYrG1K7MzEqLixiNpDbEeFh0U3XaP7xh9FWdu36OWLLyX5pYcWG1DbAVHqi2ljyHRQsfDtZTaIz9I8NvD2Ots2Kd/6G5V4iNXiGECR/EY7I/7D39xVRreFRmyelx25bfX6pOLUTSOW0bw+UuHzh7XST5g03trqsafQ6quSL5c28R4F8uOazFa7Jy4TLxXSslDS4nob2PRcsvCs86i2bFk5ZnybV1FOSK2rvsyIqKXhyMklzFwsD2aEKTj0ef0GTHlyc02jaJ27OdstOaLVrtsegoMkJieQ4G9/Arro9F6HT+gv17/qxly81+aOieG4c6LM0uDo3dLf85rlodBfTRak25qz4bfXh3bZs0ZNpiNpY5waRjiYZi0Hob/eOaizwjLitM6bLyxPh9fL83T7zW0bZK7r4fhQjdxHuzydvZ/EqTouFxgvOXJbmv7XPLn545YjaGyVqjlKBSgRyCZQIUE3IEcgm5AiBGoKBBQIHagdqCgQOEFAgo1AwQfUAgEHnGY3LLizqGHLwKeEPqXEEuMkvuUTNbN0BcSQdCBpzQeZx7eDUQYrwWRsOGxTU9PUSEHOJZ2vNw7NYNb6t9Oh7UHSUGtkrXisbBpkMZcdNb3PXyQJg+IPlpTM+2cZ+QsNOWl0GDLjU/o0MrWtMkjy0ixsdSAAL9wQZdVjH5GKWK35SVjCDra97jxFkDtxJwqpYnW4ccYfe2vIE317ygxoqytlZx42xiPUtY65c4DvHX6EBUY090MMkIaHSSBhDgSAdR0t1QPDW1LpJaYmMTCMuY8AloceWdpNzzGlxy80CbFY66upBJI0NqI3vhqGN5NmiOV4HcdHDucEG+QCAQCBSgRyBCgmUEygRyBHIJuQIUCtQOEFAgcIHCCgQUCBwgoEDBB9QCAQeDwqodS4xizSwvkkip6mFg9qVjITEWtHaHNy+YQeUpt3mJz4TNxqvJJUmSolpDBES+fMXC8x9dpcWt5cr+Nw6dslU1EmHwPqonMqRGBK1ws7O0ZSfnWv5oEomyTVfpDonRsbHlAdoSSezzKDEpDPTxPpvR3vN3ZHN9kh3Unogq7DpGRUjMpJZK1z7a21JPkLoJ4thcjZmmJpMT5WPc0fBe02J7gQfsQZRoXPq57tIjkhyh3S5DRoglSVNTBF6OaZzntBDXC2QjoSeiCNRg7208EWUuPFDpLdAb31HTW10GZh1K6mndGGXgeMwfb2SPgudzt493eg0u6314qyqHuVTiFTLCejo7tjDh4ljvsQe1QCAQCBXIEcgQoJlBMoEKBHIJuQIUChA4QUCBwgo1A4QUCBwgo1A4QCAQCDGmoIXysndG0zRhwY+3rNDtHAHsNhogyUAgEAgEAgEAgEE6iBsjHRvF2OBa4doIsQUHylpmRRtiiYGRsAa1rRZrWgWAAHIIKoBAIBApQIUEygQoJlAhQI5BNyBCgVqBwgoEDhBRqB2oKBA4QUagcIBAIBAIBB8fyPgtb+rLMd3lgvmFZnaFrsFneQJvIE3kCbyM/BvdD8U/eFefZ+f+6n8M/vCPqfUbte0QQgEAgEAgEClAjkEygQoJlAjkCOQTcgQoFagcIKBA4QUagdqCjUDhBRqBwgEAgEAgEHx/I+C1v6ssx3eWC+X17LYLLAQCAQZ+De6H4p+8K9+z391P4Z/eEfU+o3a9oghAIBAIBAIFKBHIJlAhQTKBHIEcgm5AhQKEDhBQIHCCjUDtQUagcIKBA4QCAQCAQCD4/kfBa39WWY7vLBfL69lsFlh57bDa+DC2xunjkeJS4N4YabZct75nD85T9Dw/JrJtyTEbe3zc8mSKd2Xjm0VNRUwqqhxawgZWgXe4uFw1ovqfO3euen0WXUZZxY+8fBm14rG8vLYXvaw+aURvbLCHGwe8NyC/LMWuJaO/kOtlZZfs/qaU5qzFvKO7lGprMum4N7ofin7wn2f/u5/DP7wan1G8XtEEIBAIBAIBApQIUEygQoJlAjkCOQTcgQoFagcIKBA4QUagdqCjUDhBRqBwgEAgEAgEHx/I+C1v6ssx3eWC+X17LYLLDlO/v3Kk+NN90a9P8AZv1sn5fyi6rtC+93B556Clmha57YR+Ua0XIa9jPXt1Ay2PZm7LrXgmox49Rkpedpt2/KZ6GeszWJgmzW1+D1pgjq6SOGoisIy5oMWa1vVcOXIGzxYG2pOq21fD9dgi9sN5tWe/Xr9e4pkx225o6uwYN7ofin7wov2f8A7ufwz+8NtT6jeL2iCEAgEAgEAgUoEcgmUCFBMoEcgRyCbkCFAoQOEFAgdqCjUDhBRqBwgo1A6AQCAQCAQfH8j4LW/qyzHd5YL5fXstnnNtdro8LiZI+F8hkdlbl0aLWJzOPI2vYdbeJVlw/h9tZaaxaI2+uzlkyckOZb1Np6XE/RYqJzpHBz7jI5pzPyBrQHDU6dF6Lg+hy6T0ls20R08fZv1Rs+SL7RV77azbP8U+jxPpXva5rA6QEBgDRZwb+c8WvY2Go17KTRcN++89q3iJjfaPHy/L4u+TL6PaNnPd5eL4NVRNkom/0svBc5sboxksb57gBxvl1Fz3q94Tp9dhtNc8/0be3fr5I+a2O0b17u1btWStoqZs1+KKdmbN7XwbA362soXDZpPFMs07bT+8N8u/oo3e0XqUQIBAIBAIBApQIUEygQoJlAjkCOQTcgQoFagoEDhA7UFGoKNQO1A4QUagdAIBAIBAIPjhotbRvEwQ0YwuT9H6f9l4qPs/q4j/1+M/JP+80Rrdn+NGYpo45I3c2v9Zp8iF0x8E12O3NSYifK0/JidRjnpLWYZu/pKaTiwUcLJBydqSL/AJpdfL5KTl4fxTLXkvkiY/F/hpXJhrO8Q2Vds8J2GKaOOSM82vAc3TkbEc1Gx8E1+K3NS0RPlafk3nUY5jaWpot3NFDIJY6KEPBuCbuse1odcA+Cl5NFxbJXltkjb3/4aRkwx4PT4fRPjfmda1iND3hdeE8Lz6XPOTJtttMdJ93k1zZq3rtDZr0aMEAgEAgEAgUoEKCZQIUEygRyBHIJuQIUCtQUCBwgo1A7UFGoHagcIKBA6AQCAQCAQCAQCAQCAQCAQCAQCAQCAQKUCFBMoEKCZQI5BNyBHIEKD//Z',
        'author_id' => 1,
        'created_at' => '2025-03-28 14:20:00',
        'status' => 'published'
    ],
    [
        'id' => 5,
        'title' => 'Desarrollo web moderno',
        'description' => '¿Qué herramientas deberías conocer hoy en día?',
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqKKsd8tQlMHLelsSOc0gkDrSbDgA24AaV8w&s',
        'author_id' => 4,
        'created_at' => '2025-03-28 15:00:00',
        'status' => 'published'
    ],
    [
        'id' => 6,
        'title' => 'Cómo hacer un blog con PHP',
        'description' => 'Guía paso a paso para crear tu propio blog.',
        'image' => 'https://via.placeholder.com/600x400',
        'author_id' => 2,
        'created_at' => '2025-03-28 16:00:00',
        'status' => 'draft'
    ],
    [
        'id' => 7,
        'title' => 'Seguridad en aplicaciones web',
        'description' => 'Evita ataques comunes como XSS y SQL Injection.',
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxp2PaDQubIWTksiateos88hb7ANDmWViXPA&s',
        'author_id' => 5,
        'created_at' => '2025-03-28 17:30:00',
        'status' => 'published'
    ],
    [
        'id' => 8,
        'title' => 'Ventajas de usar frameworks',
        'description' => 'Por qué deberías usar Laravel, Symfony, etc.',
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_fA1GxLhB-Dcz6BS9NMvIlEBkkQwidj_zZw&s',
        'author_id' => 3,
        'created_at' => '2025-03-28 18:00:00',
        'status' => 'published'
    ],
    [
        'id' => 9,
        'title' => 'Diseño responsive',
        'description' => 'Cómo hacer que tu web se vea bien en todos los dispositivos.',
        'image' => 'https://via.placeholder.com/600x400',
        'author_id' => 1,
        'created_at' => '2025-03-28 19:00:00',
        'status' => 'draft'
    ],
    [
        'id' => 10,
        'title' => 'Usando APIs con PHP',
        'description' => 'Aprende a consumir y crear APIs RESTful.',
        'image' => 'data:image/jpeg;base64,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',
        'author_id' => 4,
        'created_at' => '2025-03-28 20:00:00',
        'status' => 'published'
    ]
];

?>