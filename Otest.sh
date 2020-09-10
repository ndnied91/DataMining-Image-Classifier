#!/bin/bash

python3 /home/students/niedzwid/tensorflow/scripts/label_image.py \
--graph=/home/students/niedzwid/tensorflow/tf_files/graph.pb \
--labels=/home/students/niedzwid/tensorflow/tf_files/labels.txt \
--image=/home/students/niedzwid/public_html/CPS4721/uploads/$1



# python3 scripts/label_image.py \
# --graph=tf_files/graph.pb \
# --labels=tf_files/labels.txt \
# --output_layer=final_result \
# --image=../public_html/CPS4721/uploads/$1
