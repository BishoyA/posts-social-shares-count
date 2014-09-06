<?php
/**
 * Functions file for PSSC
 * @package    WordPress
 * @subpackage Posts Social Shares Count
 * @since      September 2014
 * @author     Bishoy A.
 * @link       http://bishoy.me
 */

function pssc_facebook( $post_id = 0 ) {
	if ( ! $post_id ) {
		global $post;
		$post_id = $post->ID;
	}

	if ( empty( $post_id ) ) {
		return 0;
	} else {
		$url = get_permalink( $post_id );
	}

	if ( ! empty( $url ) ) {
		require_once 'classes/share.count.php';
		$share_counter = new PsscShareCount( $url );
		return $share_counter->get_fb();
	} else {
		return 0;
	}
}

function pssc_twitter( $post_id = 0 ) {
	if ( ! $post_id ) {
		global $post;
		$post_id = $post->ID;
	}

	if ( empty( $post_id ) ) {
		return 0;
	} else {
		$url = get_permalink( $post_id );
	}

	if ( ! empty( $url ) ) {
		require_once 'classes/share.count.php';
		$share_counter = new PsscShareCount( $url );
		return $share_counter->get_tweets();
	} else {
		return 0;
	}
}

function pssc_linkedin( $post_id = 0 ) {
	if ( ! $post_id ) {
		global $post;
		$post_id = $post->ID;
	}

	if ( empty( $post_id ) ) {
		return 0;
	} else {
		$url = get_permalink( $post_id );
	}

	if ( ! empty( $url ) ) {
		require_once 'classes/share.count.php';
		$share_counter = new PsscShareCount( $url );
		return $share_counter->get_linkedin();
	} else {
		return 0;
	}
}

function pssc_gplus( $post_id = 0 ) {
	if ( ! $post_id ) {
		global $post;
		$post_id = $post->ID;
	}

	if ( empty( $post_id ) ) {
		return 0;
	} else {
		$url = get_permalink( $post_id );
	}

	if ( ! empty( $url ) ) {
		require_once 'classes/share.count.php';
		$share_counter = new PsscShareCount( $url );
		return $share_counter->get_plusones();
	} else {
		return 0;
	}
}

function pssc_pinterest( $post_id = 0 ) {
	if ( ! $post_id ) {
		global $post;
		$post_id = $post->ID;
	}

	if ( empty( $post_id ) ) {
		return 0;
	} else {
		$url = get_permalink( $post_id );
	}

	if ( ! empty( $url ) ) {
		require_once 'classes/share.count.php';
		$share_counter = new PsscShareCount( $url );
		return $share_counter->get_pinterest();
	} else {
		return 0;
	}
}

function pssc_delicious( $post_id = 0 ) {
	if ( ! $post_id ) {
		global $post;
		$post_id = $post->ID;
	}

	if ( empty( $post_id ) ) {
		return 0;
	} else {
		$url = get_permalink( $post_id );
	}

	if ( ! empty( $url ) ) {
		require_once 'classes/share.count.php';
		$share_counter = new PsscShareCount( $url );
		return $share_counter->get_delicious();
	} else {
		return 0;
	}
}

function pssc_stumble( $post_id = 0 ) {
	if ( ! $post_id ) {
		global $post;
		$post_id = $post->ID;
	}

	if ( empty( $post_id ) ) {
		return 0;
	} else {
		$url = get_permalink( $post_id );
	}

	if ( ! empty( $url ) ) {
		require_once 'classes/share.count.php';
		$share_counter = new PsscShareCount( $url );
		return $share_counter->get_stumble();
	} else {
		return 0;
	}
}

function pssc_all( $post_id = 0 ) {
	if ( ! $post_id ) {
		global $post;
		$post_id = $post->ID;
	}

	if ( empty( $post_id ) ) {
		return 0;
	} else {
		$url = get_permalink( $post_id );
	}

	if ( ! empty( $url ) ) {
		require_once 'classes/share.count.php';
		$share_counter = new PsscShareCount( $url );
		return $share_counter->get_count();
	} else {
		return 0;
	}
}