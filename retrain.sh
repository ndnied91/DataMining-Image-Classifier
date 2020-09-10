
python3 -m scripts.retrain \
--image_dir=tf_files/photos \
--how_many_training_steps=500 \
--bottleneck_dir=tf_files/bottlenecks \
 --model_dir=tf_files/models/ \
--summaries_dir=tf_files/training_summaries/"${ARCHITECTURE}" \
--output_graph=tf_files/graph.pb \
--output_labels=tf_files/labels.txt \
 --architecture="${ARCHITECTURE}" \
--summaries_dir=tf_files/summaries
