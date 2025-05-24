<?php
if (!defined('ABSPATH')) exit;

function ai_meta_register_settings() {
    register_setting('ai_meta_settings_group', 'ai_meta_api_key');
    register_setting('ai_meta_settings_group', 'ai_meta_auto_generate');
}

add_action('admin_init', 'ai_meta_register_settings');

function ai_meta_render_settings_page() {
    ?>
    <div class="wrap">
        <h1>AI AutoMeta Builder Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('ai_meta_settings_group');
            do_settings_sections('ai_meta_settings_group');
            ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">API Key (OpenAI/Gemini)</th>
                    <td>
                        <input type="text" name="ai_meta_api_key" style="width: 400px;"
                               value="<?php echo esc_attr(get_option('ai_meta_api_key')); ?>" />
                        <p class="description">Keep your key safe and do not share it.</p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Auto-generate on Post Save</th>
                    <td>
                        <input type="checkbox" name="ai_meta_auto_generate" value="1"
                            <?php checked(1, get_option('ai_meta_auto_generate', 0)); ?> />
                        <label for="ai_meta_auto_generate">Enable automatic generation when saving posts</label>
                    </td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}
