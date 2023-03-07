<?php
// File paths
$root_path = "/var/www/html"; //use absolute path
$egdb_files_folder = "coconutbase";
$easy_gdb_path = "$root_path/easy_gdb";
$blast_dbs_path = "$root_path/blast_dbs";
$expression_path = "$root_path/expression_data";
$downloads_path = "downloads";
$lookup_path = "$root_path/lookup"; //from root 
$images_path = "/$egdb_files_folder/egdb_images";
$custom_text_path = "$root_path/$egdb_files_folder/egdb_custom_text";
$species_path = "$root_path/$egdb_files_folder/egdb_species";
$lab_path = "$root_path/$egdb_files_folder/egdb_labs";
$annotation_links_path = "$root_path/$egdb_files_folder/annotations";

// header
$dbTitle = "CoconutBase";
$header_img = "header_coco1.jpeg";
$db_logo = "coconutdb_logo.png";

// Toolbar
$tb_about = 0;
$tb_downloads = 1;
$tb_species = 0;
$tb_search_box = 1;
$tb_tools = 1;
$tb_search = 1;
$tb_blast = 1;
$tb_jbrowse = 1;
$tb_seq_ext = 1;
$tb_annot_ext = 1;
$tb_gene_expr = 0;
$tb_lookup = 0;
$tb_enrichment = 1;
$tb_more = 0;
$tb_custom = 0;

// Expression Atlas
$expr_cards = 1;
$expr_menu = 1;

// About
$ab_citation = 1;
$ab_labs = 1;

//Gene examples
$gene_sample = "";
$input_gene_list="Cnu_31986-RA
Cnu_34333-RA
Cnu_06654-RA
Cnu_06655-RA
Cnu_06656-RA
Cnu_06658-RA
Cnu_06657-RA
Cnu_06659-RA
Cnu_06661-RA
Cnu_06660-RA
Cnu_06662-RA
Cnu_06665-RA
Cnu_06666-RA
Cnu_06664-RA
Cnu_06667-RA
Cnu_06668-RA
Cnu_06672-RA
Cnu_06675-RA
Cnu_06674-RA
Cnu_06676-RA
Cnu_06673-RA
Cnu_06678-RA
Cnu_06677-RA
Cnu_06679-RA
Cnu_06680-RA
";


// Tools
$max_lookup_input = 10000;
$max_extract_seq_input = 10000;
$max_blast_input = 20;
$max_expression_input = 15;

// BLAST
$blast_example=">protein_or_DNA
ATGAGTTGTGGGGAGGGATTTATGTCACCACAAATAGAGACTAAAGGAAGTGTTGGATTC
AAAGCGGGTGTTAAAGAGTACAAATTGATTTATTATACTCCTGAATACGAAACCAAAGAT
ACCGATATCTTGGTAACATTTCGAGTAACTCCTCAACCTGGAGTTTCGCCTGTAGAAGCA
GGCTTGAGCGGGCATATCGATACTGACTGATCGATCGATCGTAGCTAGCTAGCTGATCGT
CGTAGCTAGTCGATCGTA";

?>

