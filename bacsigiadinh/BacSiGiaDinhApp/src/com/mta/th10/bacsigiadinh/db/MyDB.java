package com.mta.th10.bacsigiadinh.db;

import com.mta.th10.bacsigiadinh.MainActivity;
import android.content.Context;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

public class MyDB extends SQLiteOpenHelper {
	public static final String DATABASE_NAME = "data.db";
	private Context context;
	private static MyDB current = null;

	public static MyDB getInstance() {
		if (current == null)
			current = new MyDB(MainActivity.Current);
		return current;
	}

	private MyDB(Context context) {
		super(context, DATABASE_NAME, null, 1);
		this.context = context;
		current = this;
	}

	@Override
	public void onCreate(SQLiteDatabase arg0) {
	}

	@Override
	public void onUpgrade(SQLiteDatabase arg0, int arg1, int arg2) {

	}

}
