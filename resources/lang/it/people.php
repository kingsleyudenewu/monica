<?php

return [

    //index
    'people_list_number_kids' => '{0} 0 bambini|{1,1} 1 bambino|{2,*} :count bambini',
    'people_list_last_updated' => 'Consultati per ultimi:',
    'people_list_number_reminders' => ':count promemoria',
    'people_list_blank_title' => 'Non ci sono contatti nel tuo account',
    'people_list_blank_cta' => 'Aggiungi qualcuno',
    'people_list_sort' => 'Ordina',
    'people_list_stats' => ':count contatti',
    'people_list_firstnameAZ' => 'Ordina per nome A → Z',
    'people_list_firstnameZA' => 'Ordina per nome Z → A',
    'people_list_lastnameAZ' => 'Ordina per cognome A → Z',
    'people_list_lastnameZA' => 'Ordina per cognome Z → A',
    'people_list_filter_tag' => 'Tutti i contatti etichettati con <span class="pretty-tag">:name</span>',
    'people_list_clear_filter' => 'Reimposta filtro',
    'people_list_contacts_per_tags' => '{0} 0 contatti|{1,1} 1 contatto|{2,*} :count contatti',
    'people_search' => 'Cerca nei tuoi contatti...',
    'people_search_no_results' => 'Nessun contatto trovato :(',

    // people add
    'people_add_title' => 'Aggiungi una persona',
    'people_add_firstname' => 'Nome',
    'people_add_middlename' => 'Secondo nome (facoltativo)',
    'people_add_lastname' => 'Cognome (facoltativo)',
    'people_add_cta' => 'Aggiungi questa persona',
    'people_add_gender' => 'Sesso',
    'people_delete_success' => 'Il contatto è stato rimosso',
    'people_delete_message' => 'Se vuoi rimuovere questo contatto,',
    'people_delete_click_here' => 'clicca qui',
    'people_delete_confirmation' => 'Rimuovere questo contatto? Questo cambio è permanente.',
    'people_add_birthday_reminder' => 'Fai gli auguri di compleanno a :name',
    'people_add_import' => 'Vuoi <a href="/settings/import">importare i tuoi contatti</a>?',

    // show
    'section_personal_information' => 'Informazioni personali',
    'section_personal_activities' => 'Attività',
    'section_personal_reminders' => 'Promemoria',
    'section_personal_tasks' => 'Cose da fare',
    'section_personal_gifts' => 'Regali',

    //
    'link_to_list' => 'Lista dei contatti',

    // Header
    'edit_contact_information' => 'Modifica informazioni del contatto',
    'call_button' => 'Aggiungi chiamata',

    // Calls
    'modal_call_title' => 'Aggiungi chiamata',
    'modal_call_comment' => 'Di cosa avete parlato? (facoltativo)',
    'modal_call_date' => 'La chiamata é stata fatta prima, quest\'oggi.',
    'modal_call_change' => 'Cambia',
    'modal_call_exact_date' => 'La chiamata é stata fatta il',
    'calls_add_success' => 'La chiamata é stata salvata.',
    'call_delete_confirmation' => 'Rimuovere questa chiamata?',
    'call_delete_success' => 'La chiamata é stata rimossa',
    'call_title' => 'Chiamate',
    'call_empty_comment' => 'Nessuna informazione',
    'call_blank_title' => 'Tieni traccia delle tue chiamate con :name',

    // age - birthday
    'birthdate_not_set' => 'Data di nascita assente',
    'age_approximate_in_years' => 'circa :age anni',
    'age_exact_in_years' => ':age anni',
    'age_exact_birthdate' => 'nato :date',

    // Last called
    'last_called' => 'Ultima chiamata il: :date',
    'last_called_empty' => 'Ultima chiamata il: sconosciuto',
    'last_activity_date' => 'Ultima attività assieme: :date',
    'last_activity_date_empty' => 'Ultima attività assieme: sconosciuto',

    // additional information
    'information_edit_success' => 'Il profilo è stato aggiornato',
    'information_edit_title' => 'Modifica le informazioni personali di :name',
    'information_edit_avatar' => 'Foto/avatar del contatto',
    'information_edit_max_size' => 'Massimo :size Mb.',
    'information_edit_firstname' => 'Nome',
    'information_edit_lastname' => 'Cognome (facoltativo)',
    'information_edit_facebook' => 'Profilo Facebook (facoltativo)',
    'information_edit_twitter' => 'Profilo Twitter (facoltativo)',
    'information_edit_linkedin' => 'Profilo LinkedIn (facoltativo)',
    'information_edit_street' => 'Indirizzo (facoltativo)',
    'information_edit_province' => 'Provincia (facoltativa)',
    'information_edit_postalcode' => 'CAP (facoltativo)',
    'information_edit_city' => 'Città (facoltativa)',
    'information_edit_country' => 'Stato (facoltativo)',
    'information_edit_email' => 'Email (facoltativo)',
    'information_edit_phone' => 'Numero di telefono (facoltativo)',
    'information_edit_probably' => 'Questa persona probabilmente ha',
    'information_edit_probably_yo' => 'anni',
    'information_edit_exact' => 'Conosco la data di nascita esatta di questa persona, che è il',
    'information_edit_help' => 'Se indichi la data di nascita esatta di questa persona creeremo un promemoria per te - ti verrà notificato l\'arrivo del suo compleanno annualmente.',
    'information_no_address_defined' => 'Nessun indirizzo',
    'information_no_email_defined' => 'Nessuna email',
    'information_no_phone_defined' => 'Nessun numero di telefono',
    'information_no_facebook_defined' => 'Nessun profilo Facebook',
    'information_no_twitter_defined' => 'Nessun profilo Twitter',
    'information_no_linkedin_defined' => 'Nessun profilo LinkedIn',
    'information_no_work_defined' => 'Nessuna informazione professionale',
    'information_work_at' => 'alla :company',
    'work_add_cta' => 'Aggiorna informazioni professionali',
    'work_edit_success' => 'Le informazioni professionali sono state aggiornate.',
    'work_edit_title' => 'Aggiorna informazioni professionali di :name',
    'work_edit_job' => 'Titolo (facoltativo)',
    'work_edit_company' => 'Azienda (facoltativa)',

    // food preferencies
    'food_preferencies_add_success' => 'Le preferenze alimentari sono state salvate',
    'food_preferencies_edit_description' => 'Magari :firstname o qualcuno nella famiglia :family ha un\'allergia. O non gli piace un certo vino. Indica queste cose qui così da ricordarle la prossima volta che li inviti a cena',
    'food_preferencies_edit_description_no_last_name' => 'Magari :firstname ha un\'allergia. O non gli piace un certo vino. Indica queste cose qui così da ricordarle la prossima volta che li inviti a cena',
    'food_preferencies_edit_title' => 'Indica le preferenze alimentari',
    'food_preferencies_edit_cta' => 'Salva preferenze alimentari',
    'food_preferencies_title' => 'Preferenze alimentari',
    'food_preferencies_cta' => 'Aggiunti preferenze alimentari',

    // reminders
    'reminders_blank_title' => 'C\'è qualcosa di cui ti vuoi ricordare riguardo a :name?',
    'reminders_blank_add_activity' => 'Aggiungi un promemoria',
    'reminders_add_title' => 'Cosa vorresti ricordare a proposito di :name?',
    'reminders_add_description' => 'Ricordami per piacere di...',
    'reminders_add_predefined' => 'Promemoria predefinito',
    'reminders_add_custom' => 'Promemoria personalizzato',
    'reminders_add_next_time' => 'Quando vorresti ti fosse ricordato?',
    'reminders_add_once' => 'Ricordamelo una sola volta',
    'reminders_add_recurrent' => 'Ricordamelo ogni',
    'reminders_add_starting_from' => 'a partire dalla data specificata qui sopra',
    'reminders_add_cta' => 'Aggiungi promemoria',
    'reminders_add_error_custom_text' => 'Devi scrivere qualcosa per questo promemoria',
    'reminders_create_success' => 'Il promemoria è stato creato',
    'reminders_delete_success' => 'Il promemoria è stato rimosso',

    'reminder_frequency_week' => 'ogni settimana|ogni :number settimane',
    'reminder_frequency_month' => 'ogni mese|ogni :number mesi',
    'reminder_frequency_year' => 'ogni anno|ogni :number anni',
    'reminder_frequency_one_time' => 'il :date',
    'reminders_delete_confirmation' => 'Rimuovere questo promemoria?',
    'reminders_delete_cta' => 'Rimuovi',
    'reminders_next_expected_date' => 'il',
    'reminders_cta' => 'Aggiungi un promemoria',
    'reminders_description' => 'Ti invieremo una email per ognuno dei promemoria qui sotto. I promemoria vengono inviati ogni mattina in cui l\'evento ha luogo. I promemoria aggiunti automaticamente per i compleanni non possono essere rimossi. Se vuoi cambiare quelle date, cambia le date di compleanno di quei contatti.',
    'reminders_one_time' => 'Una volta',
    'reminders_type_week' => 'settimana',
    'reminders_type_month' => 'mese',
    'reminders_type_year' => 'anno',

    // significant other
    'significant_other_sidebar_title' => 'Partner',
    'significant_other_cta' => 'Aggiungi partner',
    'significant_other_add_title' => 'Chi è il partner di :name?',
    'significant_other_add_firstname' => 'Nome',
    'significant_other_add_unknown' => 'Non conosco l\'età di questa persona',
    'significant_other_add_probably' => 'Questa persona probabilmente ha',
    'significant_other_add_probably_yo' => 'anni',
    'significant_other_add_exact' => 'Conosco la data di nascita esatta di questa persona, che è il',
    'significant_other_add_help' => 'Se indichi la data di nascita esatta di questa persona creeremo un promemoria per te - ti verrà notificato l\'arrivo del suo compleanno annualmente.',
    'significant_other_add_cta' => 'Aggiungi partner',
    'significant_other_edit_cta' => 'Modifica partner',
    'significant_other_delete_confirmation' => 'Rimuovere il partner di questo contatto? Questo cambio è permanente.',
    'significant_other_add_success' => 'Partner aggiunto',
    'significant_other_edit_success' => 'Partner modificato',
    'significant_other_delete_success' => 'Partner rimosso',
    'significant_other_add_birthday_reminder' => 'Fai gli auguri di buon compleanno a :name, partner di :contact_firstname',

    // kids
    'kids_sidebar_title' => 'Figli',
    'kids_sidebar_cta' => 'Aggiungi un\'altro figlio',
    'kids_blank_cta' => 'Aggiungi figlio',
    'kids_add_title' => 'Aggiungi figlio',
    'kids_add_boy' => 'Maschio',
    'kids_add_girl' => 'Femmina',
    'kids_add_gender' => 'Sesso',
    'kids_add_firstname' => 'Nome',
    'kids_add_firstname_help' => 'Immaginiamo il cognome sia :name',
    'kids_add_probably' => 'Questa persona probabilmente ha ',
    'kids_add_probably_yo' => 'anni',
    'kids_add_exact' => 'Conosco la data di nascita esatta di questa persona, che è il',
    'kids_add_help' => 'Se indichi la data di nascita esatta di questa persona creeremo un promemoria per te - ti verrà notificato l\'arrivo del suo compleanno annualmente.',
    'kids_add_cta' => 'Aggiungi figlio',
    'kids_edit_title' => 'Modifica informazioni su :name',
    'kids_delete_confirmation' => 'Rimuovere questo figlio? Questo cambio è permanente.',
    'kids_add_success' => 'Figlio aggiunto',
    'kids_update_success' => 'Figlio modificato',
    'kids_delete_success' => 'Figlio rimosso',
    'kids_add_birthday_reminder' => 'Fai gli auguri di buon compleanno a :name, figlio di :contact_firstname',

    // tasks
    'tasks_desc' => 'Tieni traccia delle cose che devi fare per :name',
    'tasks_blank_title' => 'Sembra tu non abbia nulla da fare che riguardi :name',
    'tasks_blank_add_activity' => 'Aggiungi compito',
    'tasks_add_title_page' => 'Aggiungi un nuovo compito che riguarda :name',
    'tasks_add_title' => 'Di che compito vuoi ti ricordiamo?',
    'tasks_add_optional_comment' => 'Commenti (facoltativi)',
    'tasks_add_cta' => 'Aggiungi compito task',
    'tasks_add_success' => 'Compito aggiunto',
    'tasks_delete' => 'Rimuovi',
    'tasks_reactivate' => 'Riattiva',
    'tasks_mark_complete' => 'Contrassegna come completa',
    'tasks_add_task' => 'Aggiungi compito',
    'tasks_added_on' => 'aggiunto il :date',
    'tasks_delete_confirmation' => 'Rimuovere questo compito?',
    'tasks_delete_success' => 'Compito rimosso',
    'tasks_complete_success' => 'Compito completato',

    // activities
    'activity_title' => 'Attività',
    'activity_type_group_simple_activities' => 'Attività semplici',
    'activity_type_group_sport' => 'Sport',
    'activity_type_group_food' => 'Cibo',
    'activity_type_group_cultural_activities' => 'Attività culturali',
    'activity_type_just_hung_out' => 'siamo usciti',
    'activity_type_watched_movie_at_home' => 'visto un film, a casa',
    'activity_type_talked_at_home' => 'parlato, a casa',
    'activity_type_did_sport_activities_together' => 'fatto sport assieme',
    'activity_type_ate_at_his_place' => 'mangiato a casa sua',
    'activity_type_ate_at_her_place' => 'mangiato a casa sua',
    'activity_type_went_bar' => 'andati al bar',
    'activity_type_ate_at_home' => 'mangiato a casa',
    'activity_type_picknicked' => 'fatto un picnic',
    'activity_type_went_theater' => 'andati a teatro',
    'activity_type_went_concert' => 'andati a un concerto',
    'activity_type_went_play' => 'andati a una rappresentazione teatrale',
    'activity_type_went_museum' => 'andati al museo',
    'activity_type_ate_restaurant' => 'mangiato al ristorante',
    'activities_add_activity' => 'Aggiungi attività',
    'activities_more_details' => 'Mostra dettagli',
    'activities_hide_details' => 'Nascondi dettagli',
    'activities_delete_confirmation' => 'Rimuovere questa attività?',
    'activities_item_information' => ':Activity il :date',
    'activities_add_title' => 'Cosa hai fatto con :name?',
    'activities_summary' => 'Descrivi cosa avete fatto',
    'activities_add_pick_activity' => '(facoltativo) Vorresti assegnare una categoria a questa attività? Non è obbligatorio, ma più avanti ti permetterà di vedere delle statistiche.',
    'activities_add_date_occured' => 'Data dell\'attività',
    'activities_add_optional_comment' => 'Commenti aggiuntivi',
    'activities_add_cta' => 'Salva attività',
    'activities_blank_title' => 'Tieni traccia di quello che tu e :name avete fatto, e ciò di cui avete parlato',
    'activities_blank_add_activity' => 'Agginugi attività',
    'activities_add_success' => 'Attività aggiunta',
    'activities_update_success' => 'Attività aggiornata',
    'activities_delete_success' => 'Attività rimossa',

    // notes
    'notes_create_success' => 'Nota creata',
    'notes_update_success' => 'Nota aggiornata',
    'notes_delete_success' => 'Nota rimossa',
    'notes_add_title' => 'Aggiungi una nota su :name',
    'notes_add_cta' => 'Aggiungi nota',
    'notes_edit_title' => 'Modifica la nota su :name',
    'notes_edit_cta' => 'Salva nota',
    'notes_written_on' => 'Scritta il :date',
    'notes_add_one_more' => 'Aggiungi un\'altra nota',
    'notes_title' => 'Note',
    'notes_blank_link' => 'Aggiungi nota',
    'notes_blank_name' => 'su :name',
    'notes_delete_confirmation' => 'Rimuovere nota? Questo cambio è permanente.',

    // gifts
    'gifts_blank_title' => 'Gestisci le tue idee regalo e i regali già fatti a :name',
    'gifts_blank_add_gift' => 'Aggiungi regalo',
    'gifts_add_success' => 'Regalo aggiunto',
    'gifts_delete_success' => 'Regalo rimosso',
    'gifts_delete_confirmation' => 'Rimuovere regalo?',
    'gifts_add_gift' => 'Aggiungi regalo',
    'gifts_link' => 'Link',
    'gifts_added_on' => 'Aggiunto il :date',
    'gifts_delete_cta' => 'Rimuovi',
    'gifts_offered' => 'consegnato',
    'gifts_add_title' => 'Gestione dei regali a :name',
    'gifts_add_gift_idea' => 'Idea regalo',
    'gifts_add_gift_already_offered' => 'Regalo già consegnato',
    'gifts_add_gift_title' => 'Cos\'è questo regalo?',
    'gifts_add_link' => 'Link alla pagina web (facoltativo)',
    'gifts_add_value' => 'Valore (facoltativo)',
    'gifts_add_comment' => 'Commenti (facoltativo)',
    'gifts_add_someone' => 'Questo regalo è per qualcuno in particolare nella famiglia di :name',
    'gifts_add_cta' => 'Aggiungi',
    'gifts_gift_idea' => 'Idea regalo',
    'gifts_gift_already_offered' => 'Regalo già consegnato',
    'gifts_table_date_added' => 'Aggiunto il',
    'gifts_table_description' => 'Descrizione',
    'gifts_table_actions' => 'Azioni',

    // debts
    'debt_delete_confirmation' => 'Rimuovere questo debito?',
    'debt_delete_success' => 'Debito rimosso',
    'debt_add_success' => 'Debito aggiunto',
    'debt_title' => 'Debiti',
    'debt_add_cta' => 'Aggiungi debito',
    'debt_you_owe' => 'Devi :amount',
    'debt_they_owe' => ':name ti deve :amount',
    'debt_add_title' => 'Gestione dei debiti',
    'debt_add_you_owe' => 'devi a :name',
    'debt_add_they_owe' => ':name ti deve',
    'debt_add_amount' => 'l\'ammontare di',
    'debt_add_reason' => 'per questo motivo (facoltativo)',
    'debt_add_add_cta' => 'Aggiungi debito',
    'debt_edit_update_cta' => 'Aggiorna debito',
    'debt_edit_success' => 'Debito aggiornato',
    'debts_blank_title' => 'Gestisci ciò che devi a :name e quello che :name ti deve',

    // tags
    'tag_edit' => 'Modifica etichetta',
];
